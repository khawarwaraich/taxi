<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{

    public function index() {
        return view('auth.login');
    }

    public function login_auth(Request $request) {

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required|min:4',
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('admin/dashboard');
        }else{
            return back();
        }
    }

    public function logout(Request $request) {
        Session::flush();
        Auth::logout();
        return redirect('admin/login');
      }
}
