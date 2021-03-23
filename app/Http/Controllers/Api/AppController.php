<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Catagories;
use Validator;
use App\Booking;
use App\User;

class AppController extends Controller
{
    public function getData()
    {

        $categories = Catagories::select('id','name', 'description', 'charges', 'charges_type', 'image')
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get();
        if ($categories->isNotEmpty()) {
            foreach ($categories as $value) {
                $value->image = BASE_URL . ORIGNAL_IMAGE_PATH_CATEGORIES . $value->image;
            }
            return response()->json(['status' => true, 'categories' => $categories], 200);
        } else {
            return response()->json(['status' => false, 'error' => 'Data not found'], 401);
        }
    }

    public function getOrders(Request $request)
    {
         $validator = Validator::make(
            $request->all(),
            [
                'user_id' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => "user_id is required"]);
        }
        $orders = Booking::where('customer_id', $request->user_id)->latest('id')
            ->with('category')->simplePaginate(7);
        if ($orders->isNotEmpty()) {
            return response()->json(['status' => true, 'data' => $orders], 200);
        } else {
            return response()->json(['status' => false, 'error' => 'Data not found'], 401);
        }
    }

    public function saveToken(Request $request)
    {
         $validator = Validator::make(
            $request->all(),
            [
                'user_id' => 'required',
                'device_token' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()]);
        }
        $user_id = $request->user_id;
        $device_token = $request->device_token;

        $user = User::find($user_id);
        if ($user->id > 0) {
            $user->device_token = $device_token;
            $user->save();
            return response()->json(['status' => true, 'message' => "Token updated successfully"], 200);
        } else {
            return response()->json(['status' => false, 'error' => 'User not found'], 401);
        }
    }


}
