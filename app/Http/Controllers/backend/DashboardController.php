<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Post;
use App\Models\SocialSetting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('backend.index');
    }

    public Function FrontendDashboard(){
        $facebook = SocialSetting::where('key', 'facebook')->first();
        $twitter = SocialSetting::where('key', 'twitter')->first();
        $youtube = SocialSetting::where('key', 'youtube')->first();
        $linkedin = SocialSetting::where('key', 'linkedin')->first();
        $pinterest = SocialSetting::where('key', 'pinterest')->first();
        $instagram = SocialSetting::where('key', 'instagram')->first();
        $logo = SocialSetting::where('key', 'logo')->first();
        return view('frontend.index', compact('facebook','twitter', 'youtube', 'linkedin', 'pinterest', 'instagram', 'logo'));
    }
}
