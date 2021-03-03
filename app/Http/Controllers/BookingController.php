<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Catagories;
use Validator;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
        $cat_id = $request->token;
        if(isset($cat_id) && !empty($cat_id))
        {
        $data['category'] = Catagories::find($cat_id);
        return view('checkout', $data);
        }

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
        if(isset($order_data) && !empty($order_data)){
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
            if(isset($book->id) && $book->id > 0)
            {
                print_r($book->id);exit;
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
        if(isset($order_data) && !empty($order_data)){
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
            if(isset($book->id) && $book->id > 0)
            {
                return response()->json(['status' => true, 'message' => "You Booking is now confirmed! We will contact you withing 5 minutes."]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
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
