<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Profile(){
        return view('backend.profile.index');
    }

    public function Setting(){
        return view('backend.profile.setting');
    }
}
