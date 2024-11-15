<?php

namespace App\Http\Controllers;

use id;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Contact;

use App\Models\Gallery;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Stripe;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;



class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $room = Room::all();

        $gallery = Gallery::all();

        return view('home.index', compact('room', 'gallery'));
    }

    public function login_home()
    {
        $room = Room::all();

        $gallery = Gallery::all();

        $user = Auth::user();

        $userid = $user->id;


        return view('home.index', compact('room', 'gallery'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $data = new Room;

        $data->room_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->wifi = $request->wifi;

        $data->room_type = $request->type;

        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('room', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        toastr()->closeButton(true)->success('Room added successfully.');



        return redirect()->back();
    }

    public function view_room()
    {
        $data = Room::all();

        return view('admin.view_room', compact('data'));
    }


    public function room_delete($id)
    {
        $data = Room::find($id);

        $data->delete();

        toastr()->closeButton(true)->success('Room deleted successfully.');

        return redirect()->back();
    }


    public function room_update($id)
    {
        $data = Room::find($id);

        return view('admin.update_room', compact('data'));
    }


    public function edit_room(Request $request, $id)
    {
        $data = Room::find($id);

        $data->room_title = $request->title;

        $data->description = $request->description;

        $data->price = $request->price;

        $data->wifi = $request->wifi;

        $data->room_type = $request->type;


        $image = $request->image;

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('room', $imagename);

            $data->image = $imagename;
        }

        $data->save();

        toastr()->closeButton(true)->success('Room updated successfully.');

        return redirect()->back();
    }


    public function room_details($id)
    {
        $room = Room::find($id);

        return view('home.room_details', compact('room'));
    }


    public function add_booking(Request $request, $id)
    {

        $request->validate([
            'startDate' => 'required|date',

            'endDate' => 'date|after:startDate',
        ]);


        $data = new Booking;

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $startDate = $request->startDate;

        $endDate = $request->endDate;



        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)->exists();

        if ($isBooked) {
            toastr()->timeOut(10000)->closeButton()->error('Room is already booked please try different date');
            return redirect()->back();
        } else {
            $data->start_date = $request->startDate;

            $data->end_date = $request->endDate;


            $data->save();

            toastr()->closeButton()->success('Room Booked Successfully.');

            return redirect()->back();
        }
    }


    public function contacts(Request $request)
    {
        $contacts = new Contact;

        $contacts->name = $request->name;

        $contacts->email = $request->email;

        $contacts->phone = $request->phone;

        $contacts->message = $request->message;

        $contacts->save();

        sweetalert()->success('Message Sent Successfully');


        return redirect()->back();
    }


    public function our_rooms()
    {
        $room = Room::all();
        return view('home.our_rooms', compact('room'));
    }


    public function hotel_gallery()
    {
        $gallery = Gallery::all();
        return view('home.hotel_gallery', compact('gallery'));
    }


    public function contact_us()
    {
        return view('home.contact_us');
    }


    public function about_us()
    {
        return view('home.about_us');
    }


    public function homes()
    {
        $room = Room::all();
        $gallery = Gallery::all();
        return view('home.homes', compact('room', 'gallery'));
    }


    public function services()
    {
        return view('home.services');
    }

    
    public function my_bookings()
    {
        $user = Auth::user();

        // Ensure user is logged in
        if ($user) {
            // Retrieve bookings only for the logged-in user
            $bookings = Booking::where('email', $user->email)->orderBy('created_at', 'desc')->get();
        } else {
            // Handle the case if there's no logged-in user, e.g., redirect to login or show an error
            return redirect()->route('login')->with('error', 'Please log in to view your bookings.');
        }

        return view('home.my_booking', compact('bookings'));
    }


    public function stripe(): View
    {
        return view('home.stripe');
    }
      
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
        Stripe\Charge::create ([
                "amount" => 10 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from itsolutionstuff.com." 
        ]);
                
        return back()
                ->with('success', 'Payment successful!');
    }


}
