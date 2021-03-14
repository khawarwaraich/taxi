<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Validator;
use Password;

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
    public function sendResetLinkEmail(Request $request){
        $this->validate($request, [
        'email'    => 'required',
    ]);

    $user =  User::where('email', $request->email)->first();
    if( $user )
    {
        $credentials = ['email' => $user->email];
        $response = Password::sendResetLink($credentials, function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return response()->json([
                    'status'        => true,
                    'message' => 'Password reset link send into mail.',
                    'data' =>''], 201);
            case Password::INVALID_USER:
                return response()->json([
                    'status'        => false,
                    'message' =>   'Unable to send password reset link.'
                ], 401);
        }  
    }
    return response()->json([
        'status'        => false,
        'message' =>   'User detail not found!'
    ], 401);
    }
}
