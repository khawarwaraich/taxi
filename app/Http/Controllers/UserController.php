<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $data['users'] = User::all();
        return view('admin.users.users_list', $data);
    }

    public function create(){
        return view('admin.users.user_form', $data);
    }
}
