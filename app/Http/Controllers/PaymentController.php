<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay($id)
    {
        // Fetch room details from the database
        $room = Room::find($id);
        if (!$room) {
            return response()->json(['error' => 'Room not found.'], 404);
        }

        $price = $room->price;
        $roomTitle = $room->room_title;

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://api.paymongo.com/v1/links",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode([
                'data' => [
                    'attributes' => [
                        'amount' => $price * 100, // PayMongo expects the amount in cents
                        'description' => 'Payment for ' . $roomTitle,
                        'currency' => 'PHP'
                    ]
                ]
            ]),
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Basic " . base64_encode(env('PAYMONGO_SECRET')),
                "content-type: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        $data = json_decode($response, true);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            $payment_url = $data['data']['attributes']['checkout_url'];
            return redirect($payment_url);
        }
    }
}
