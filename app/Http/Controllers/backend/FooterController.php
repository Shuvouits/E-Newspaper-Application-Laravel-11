<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function TopFooter(){
        return view('backend.footer.top-footer');
    }

    public function BottomFooter(){
        return view('backend.footer.bottom-footer');
    }

}
