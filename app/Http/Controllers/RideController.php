<?php

namespace App\Http\Controllers;

use App\Ride;
use GoogleMaps;
use App\Catagories;
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
        if(isset($from_location->results[0]) && !empty($from_location->results[0]) && isset($to_location->results[0]) && !empty($to_location->results[0]))
        {
            $from =array();
            $from['address'] = $from_location->results[0]->formatted_address;
            $from['lat'] = $from_location->results[0]->geometry->location->lat;
            $from['lng'] = $from_location->results[0]->geometry->location->lng;
            $to =array();
            $to['address'] = $to_location->results[0]->formatted_address;
            $to['lat'] = $to_location->results[0]->geometry->location->lat;
            $to['lng'] = $to_location->results[0]->geometry->location->lng;
            $distanceMatrix = $this->getDistanceMatrix($from['lat'],$from['lng'],$to['lat'],$to['lng']);
            $data['distance'] = $distanceMatrix['distance'];
            $data['duration'] = $distanceMatrix['duration'];
            $distance_value = number_format($distanceMatrix['distance_value'], 2);
            $categories = Catagories::all();
            if(isset($categories) && !empty($categories))
            {
                foreach($categories as $key => $value)
                {
                    $charges_type = $value->charges_type;
                    $charges = $value->charges;
                    if($charges_type == "distance")
                    {
                        $categories[$key]['amount'] = $charges * $distance_value;
                    }else{
                        $categories[$key]['amount'] = $charges;
                    }
                }
            }
            $data['from_location'] = $from;
            $data['to_location'] = $to;
            $data['categories'] = $categories;
            return view('ride_details', $data);
        }else{
            return redirect('/');
        }

    }

    public function getAdressAttr($address){
        $response = GoogleMaps::load('geocoding')
		->setParam (['address' => $address])
 		->get();
         $response = json_decode($response);
         return $response;
    }

    public function getDistanceMatrix($from_lat,$from_lng,$to_lat,$to_lng){
        $responce = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?&origins=' . $from_lat . ',' . $from_lng . '&destinations=' . $to_lat . ',' . $to_lng . '&key=AIzaSyDonC-1G2p3mTe58eYXqSO3-4MIx5Zj3pM');
        $responce = json_decode($responce);
        $outer_status = $responce->status;
        if (isset($outer_status) && $outer_status == "OK"){
            if(isset($responce->rows[0]->elements[0]->distance->text))
            {
                $data['distance'] = $responce->rows[0]->elements[0]->distance->text;
                $data['distance_value'] = $responce->rows[0]->elements[0]->distance->value / 1000;
            }
            if(isset($responce->rows[0]->elements[0]->duration->text))
            {
                $data['duration'] = $responce->rows[0]->elements[0]->duration->text;
            }

        }

        return $data;
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
