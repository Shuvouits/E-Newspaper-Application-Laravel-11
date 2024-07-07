<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function LeftAdvertise(){
        return view('backend.advertise.left-advertise');
    }

    public function RightAdvertise(){
        return view('backend.advertise.right-advertise');
    }
}
