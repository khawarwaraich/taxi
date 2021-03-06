<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Catagories;
use Exception;
use Validator;
use Stripe;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['bookings'] = Booking::latest('id')
            ->with('category')
            ->get();
        return view('admin.bookings.booking_order', $data);
    }


    public function checkout(Request $request)
    {
        $cat_id = $request->token;
        if (isset($cat_id) && !empty($cat_id)) {
            $data['category'] = Catagories::find($cat_id);
            return view('checkout', $data);
        }
    }

    public function orderDetail($id)
    {
        $data['booking'] = Booking::find($id);
        return view('admin.bookings.order_detail', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bookRide(Request $request)
    {
        $order_data = json_decode($request->order_data);
        $order_data = $order_data[0];
        if (isset($order_data) && !empty($order_data)) {
            $data['category_id'] = $order_data->category_id;
            $data['customer_id'] = $order_data->customer_id;
            $data['from_location'] = $order_data->start;
            $data['to_location'] = $order_data->end;
            $data['order_total'] = $order_data->order_amount;
            $data['full_name'] = $request->full_name;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['country'] = $request->country;
            $data['note'] = $request->note;
            $data['payment_status'] = 0;

            $book = Booking::create($data);
            if (isset($book->id) && $book->id > 0) {
                $currency = "USD";
                $form = $this->stripe_checkout($book->id, $data['order_total'], $data['full_name'], $currency);
                return view('payment.form', $form);
            }
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function appBooking(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'order_data' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()]);
        }
        $order_data = json_decode($request->order_data);
        if (isset($order_data) && !empty($order_data)) {
            $data['category_id'] = $order_data->category_id;
            $data['customer_id'] = $order_data->customer_id;
            $data['from_location'] = $order_data->start;
            $data['to_location'] = $order_data->end;
            $data['order_total'] = $order_data->order_amount;
            $data['full_name'] = $order_data->full_name;
            $data['email'] = $order_data->email;
            $data['phone'] = $order_data->phone;
            $data['country'] = $order_data->country;
            $data['note'] = $order_data->note;
            $data['payment_status'] = 0;
            $book = Booking::create($data);
            if (isset($book->id) && $book->id > 0) {
                $currency = "USD";
                $form = $this->stripe_checkout($book->id, $data['order_total'], $data['full_name'], $currency);
                return view('payment.form', $form);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    function stripe_checkout($id, $amount, $name, $currency)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [
                    [
                        'name' => $name,
                        'currency' => $currency,
                        'amount' =>  $amount * 100,
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => 'http://thequickestdeliveryservice.com/payment-success?order_id=' . $id,
                'cancel_url' => 'http://thequickestdeliveryservice.com/payment-cancel?order_id=' . $id,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
        $data['session_id'] = $session->id;
        $data['stripe_publish_key'] = env('STRIPE_KEY');
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function payment_success(Request $request)
    {
        $order_id = $request->order_id;
        if (isset($order_id) && $order_id > 0) {
            $order = Booking::find($order_id);
            $order->payment_status = 1;
            $order->save();
            return view('payment.success', compact('order_id'));
        }
    }

    public function payment_error(Request $request)
    {
        $order_id = $request->order_id;
        if (isset($order_id) && $order_id > 0) {
            return view('payment.error', compact('order_id'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
