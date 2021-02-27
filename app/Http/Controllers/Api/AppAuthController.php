<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;

class AppAuthController extends Controller
{
    public function register(Request $request)
    {
        $status = false;
        $message = "Error occurred check errors parameter to verify your data";
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'email|unique:users',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['status' => $status, 'message' => "Email address already taken"]);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'customer',
            'password' => bcrypt($request->password)
        ]);

        $token = $user->createToken('QuickestDelivery')->accessToken;
        if(isset($token) && !empty($token))
        {
            $status = true;
            $message = "Contgratulations you account has been registered.";
        }
        return response()->json(['status' => $status, 'message' => $message, 'token' => $token], 200);
    }

    public function login(Request $request)
    {
        $status = false;
        $message = "Unauthorized User";
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('QuickestDelivery')->accessToken;
            $status = true;
            $message = "Login Successfull";
            return response()->json([
                'status' => $status,
                'message' => $message,
                'token' => $token,
                'user' => auth()->user()],
                200);
        } else {
            return response()->json([
                'status' => $status,
                'message' => $message],
                401);
        }
    }
}
