<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Catagories;

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
}
