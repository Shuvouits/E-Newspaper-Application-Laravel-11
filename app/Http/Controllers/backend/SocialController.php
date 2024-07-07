<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function Social(){
        return view('backend.social.index');
    }

    public function LogoSetting(){
        return view('backend.social.logo-setting');
    }
}
