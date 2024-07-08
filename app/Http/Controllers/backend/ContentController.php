<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function AddContent(){
        return view('backend.content.add-content');
    }

    public function ViewContent(){
        return view('backend.content.view-content');
    }

}
