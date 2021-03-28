<?php

namespace App\Http\Controllers;

use App\User;
use App\Riders;
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
        $data['users'] = User::orderBy('id', 'desc')->get();
        return view('admin.users.users_list', $data);
    }

    public function riders(User $model)
    {
        $data['users'] = Riders::orderBy('id', 'desc')->get();
        return view('admin.riders.users_list', $data);
    }

    public function riders_create(){

        return view('admin.riders.user_form');
    }


    public function store(Request $request)
    {
        $update_id = $request->id;
        $data = $request->except('_token');
        if (isset($update_id) && !empty($update_id) && $update_id != 0) {
            $user_data = Riders::where('id',  $update_id)->update($data);
            $user_data = Riders::find($update_id);
            if ($_FILES['profile_image']['size'] > 0) {
                if(isset($user_data->profile_image) && !empty($user_data->profile_image))
                {
                    $file = $request->file('profile_image');
                    delete_images_by_name(ORIGNAL_IMAGE_PATH_USERS,LARGE_IMAGE_PATH_USERS,MEDIUM_IMAGE_PATH_USERS,SMALL_IMAGE_PATH_USERS, $user_data->profile_image);
                    upload_images(ORIGNAL_IMAGE_PATH_USERS,LARGE_IMAGE_PATH_USERS,MEDIUM_IMAGE_PATH_USERS,SMALL_IMAGE_PATH_USERS, $file, $update_id, 'profile_image', 'users');
                }
            }
            return redirect()->route('admin:riders')->with('success', 'Rider data updated successfully!');
        }else{
            $user_data = Riders::where('email' , $request->email)->first();
            if(isset($user_data) &&  $user_data->id > 0)
            {
                return back()->with('error', 'Email already taken!');
            }
            $user_data = Riders::create($data);
            $last_id = $user_data->id;
            if (isset($last_id) && !empty($last_id)) {
                if (isset($_FILES['profile_image']['size'])) {
                    if ($_FILES['profile_image']['size'] > 0) {
                        $file = $request->file('profile_image');
                        upload_images(ORIGNAL_IMAGE_PATH_USERS,LARGE_IMAGE_PATH_USERS,MEDIUM_IMAGE_PATH_USERS,SMALL_IMAGE_PATH_USERS, $file, $last_id, 'profile_image', 'users');
                    }
                }
                return redirect()->route('admin:riders')->with('success', 'Rider registered successfully!');
            } else {
                return back()->with('error', 'Something Went wrong!');
            }

        }
    }
    public function change_status(Request $request)
    {
        $status = false;
        $message = "Error in Changing Status";
        $user_id = $request->user_id;
        $status = $request->status;
        if (isset($user_id) && !empty($user_id)) {
            if ($status == 0) {
                $status = 1;
            } else {
                $status = 0;
            }
            $categories = DB::table('riders')->where('id', $user_id)->update(['status' => $status]);
            $status = true;
            $message = "Status Changed";
        }
        return response()->json(['status' => $status, 'message' => $message]);
    }

    public function destroy($id)
    {
        $user = DB::table('riders')->where('id', $id)->delete();
        if ($user == 1) {
            return redirect()->route('admin:riders')->with('success', 'Rider removed successfully!');
        }

    }
}
