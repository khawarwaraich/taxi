<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function front()
    {
        return view('home');
    }

    public function about()
    {
        return view('about_us');
    }


    public function front_login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function auth(Request $request)
    {
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->pass])) {
           return redirect()->intended('/');
        }else{
            return redirect()->intended('login')->with('error', 'Invalid Credentials!');
        }
    }

    public function logout(){
        Auth::guard('web')->logout();
        return redirect()->intended('/');
    }

    public function registerUser(Request $request){

        $name = $request->name;
        $email = $request->email;
        $password = $request->pass;

        $reg = User::create([
            'name' => $name,
            'email' => $email,
            'email_verified_at' => now(),
            'password' => Hash::make($password),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if (!empty($reg->id)) {
            return redirect()->intended('login')->with('success', 'Congrats account has been registered!');
        }else{
            return view('register')->with('error', 'Something went wrong!');
        }

    }


}
