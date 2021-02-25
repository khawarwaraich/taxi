<?php

namespace App\Http\Controllers;

use App\Ride;
use GoogleMaps;
use Illuminate\Http\Request;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requestDrive(Request $request)
    {
        $from_location = $request->from_location;
        $to_location = $request->to_location;
        $from_location = $this->getAdressAttr($from_location);
        $to_location = $this->getAdressAttr($to_location);
        $from =array();
        $from['address'] = $from_location->results[0]->formatted_address;
        $from['lat'] = $from_location->results[0]->geometry->location->lat;
        $from['lng'] = $from_location->results[0]->geometry->location->lng;
        $to =array();
        $to['address'] = $to_location->results[0]->formatted_address;
        $to['lat'] = $to_location->results[0]->geometry->location->lat;
        $to['lng'] = $to_location->results[0]->geometry->location->lng;

        $data['from_location'] = $from;
        $data['to_location'] = $to;
        return $data;
    }

    public function getAdressAttr($address){
        $response = GoogleMaps::load('geocoding')
		->setParam (['address' => $address])
 		->get();
         $response = json_decode($response);
         return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function show(Ride $ride)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(Ride $ride)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ride $ride)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ride $ride)
    {
        //
    }
}
