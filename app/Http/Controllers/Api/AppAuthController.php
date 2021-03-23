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

    public function profileUpdate(Request $request)
    {
        $status = false;
        $validator = Validator::make(
            $request->all(),
            [
                'image' => 'required|image',
                'user_id' => 'required',
            ]
        );
        if ($validator->fails()) {
            return response()->json(['status' => $status, 'errors' => $validator->errors()]);
        }
        $user = User::find($request->user_id);
        if(isset($user) && !empty($user->id))
        {
            if($request->hasFile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('/images'), $imageName);
            $user->image = $imageName;
            }
            $user->save();
            return response()->json(['status' => true, 'message' => "Profile image updated"], 200);
        }else{
            return response()->json(['status' => false, 'message' => "User not exists"], 200);
        }

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
            $user = User::find(auth()->user()->id);
            {
                 if(isset($user->image)){
                    $user->image = url('/public/images', $user->image);
                    }else{
                    $user->image = '';
                    }
            }
            return response()->json([
                'status' => $status,
                'message' => $message,
                'token' => $token,
                'user' => $user],
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
