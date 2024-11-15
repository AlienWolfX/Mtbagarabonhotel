<?php

namespace App\Http\Controllers;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Contact;

use App\Models\Gallery;

use Illuminate\Http\Request;

use App\Notifications\MyFirstNotification;

use Illuminate\Support\Facades\Notification;

use Nofication;

class AdminController extends Controller
{
    public function bookings()
    {
        $data=Booking::all();

        return view('admin.booking',compact('data'));
    }


    public function delete_booking($id)
    {
        $data = Booking::find($id);

        $data->delete();

        toastr()->closeButton()->success('Booking Deleted Successfully');

        return redirect()->back();
    }


    public function approve_book($id)
    {
        $booking = Booking::find($id);

        $booking->status='approve';

        $booking->save();

        toastr()->closeButton()->success('Room Approve');

        return redirect()->back();
    }



    public function reject_book($id)
    {
        $booking = Booking::find($id);

        $booking->status='rejected';

        $booking->save();

        toastr()->closeButton()->warning('Room Rejected');

        return redirect()->back();
    }


    public function view_gallery()
    {
        $gallery = Gallery::all();

        return view('admin.gallery', compact('gallery'));
    }


    public function upload_gallery(Request $request)
    {
          $data = new Gallery;

          $image = $request->image;


          if($image)
          {
             $imagename=time().'.'.$image->getClientOriginalExtension();

             $request->image->move('gallery',$imagename);

             $data->image = $imagename;

             $data->save();

             return redirect()->back();
          }

    }


    public function delete_gallery($id)
    {
        $data = Gallery::find($id);

        $data->delete();

        return redirect()->back();
    }


    public function all_messages()
    {
        $data = Contact::all();

        return view ('admin.all_messages', compact('data'));
    }


    public function send_mail($id)
    {
        $data = Contact::find($id);

        return view('admin.send_mail', compact('data'));
    }
        
    
    public function mail(Request $request, $id)
    {
        $data = Contact::find($id);

        $details = [
               
            'greeting' => $request->greeting ,

            'body' => $request->body ,

            'action_text' => $request->action_text ,

            'action_url' => $request->action_url ,

            'endline' => $request->endline ,


        ];

      Notification::send($data,new MyFirstNotification($details));

      toastr()->closeButton()->success('Message sent successfully');

        return redirect()->back();


    }


    public function admin_home()
    {
        return view('admin.admin_home');
    }


}
