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

        $post = Post::latest()->with('contentData','zoomData')->first();
        $content_data = "";

        if($post){

            $post_id = $post->id;

            $content_data = Content::where('post_id', $post_id)
            ->take(1)
            ->first();

        }

       // return $post;

       $logo = SocialSetting::where('key', 'logo')->first();


        return view('frontend.index', compact('content_data', 'post', 'logo'));
    }

    public function SpecificContent($date, $key_id){
        $post = Post::where('date', $date)->first();

        $content_data = "";

        if($post){
            $post_id = $post->id;

            $content_data = Content::where('post_id', $post_id)
            ->skip($key_id - 1)
            ->take(1)
            ->first();
        }



        return view('frontend.specific.index', compact('content_data','post', 'key_id'));
    }

    public function AllPage(){
        $post = Post::latest()->with('contentData')->first();
        return view('frontend.allpage.index', compact('post'));
    }
}
