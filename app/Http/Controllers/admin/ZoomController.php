<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Zoom;
use Illuminate\Http\Request;

class ZoomController extends Controller
{
    public function AddZoom(){
        $post = Post::latest()->get();
        return view('backend.image-zoom.index', compact('post'));
    }

    public function StoreZoom(Request $request){

        $request->validate([

            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048', // Adjust the validation rules as needed
        ]);

        $image = '';

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {


                // Store the new avatar
                $image = $request->file('image')->getClientOriginalName();
                $request->file('image')->move(public_path('uploads'), $image);

            }
        }

        $zoom = new Zoom();
        $zoom->post_id = $request->post_id;
        $zoom->coords = $request->coords;
        $zoom->image = $image;
        $zoom->save();

        return redirect()->back()->with('success', 'New Data Inserted');


    }

    public function ViewZoom(){
        $zoom = Zoom::latest()->with('postData')->get();
        return view('backend.image-zoom.view', compact('zoom'));
    }

    public function destroy($id)
    {
        $zoom = Zoom::findOrFail($id);

        if ($zoom->image && file_exists(public_path('uploads/' . $zoom->image))) {
            unlink(public_path('uploads/' . $zoom->image));
        }


        $zoom->delete();

        return response()->json(['success' => 'Post deleted successfully!']);
    }


}
