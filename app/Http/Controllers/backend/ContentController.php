<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Post;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function AddContent()
    {
        return view('backend.content.add-content');
    }

    public function InsertContent(Request $request)
    {

        $request->validate([
            'date' => 'required|date',
            'post_title' => 'required|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'content.*' => 'required|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048', // Adjust validation rules as needed
        ]);



        $post = new Post();
        $post->date = $request->date;
        $post->post_title = $request->post_title;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->save();

        $postId = $post->id;

        foreach ($request->file('content') as $index => $file) {
            $filename = $file->getClientOriginalName();
            $file->move('uploads', $filename);

            // Create a new Content instance for each image
            $content = new Content();
            $content->post_id = $postId;
            $content->content = $filename;
            $content->save();

        }

        return redirect()->back()->with('success', 'New Content Inserted');


    }

    public function ViewContent()
    {
        $post = Post::all();

        return view('backend.content.view-content', compact('post'));
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return response()->json(['success' => 'Post deleted successfully!']);
    }

    public function EditContent($id){
        $post = Post::where('id', $id)->with('contentData')->first();
       // return $post;
        return view('backend.content.edit-content', compact('post'));

    }

    public function UpdateContent(Request $request) {
        $request->validate([
            'date' => 'required|date',
            'post_title' => 'required|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'content.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048',
        ]);

        $post_id = $request->input('id');

        $post = Post::findOrFail($post_id);
        $post->date = $request->date;
        $post->post_title = $request->post_title;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->save();


       if($request->file('existing_content')){

        foreach ($request->file('existing_content') as $index => $file) {
            $filename = $file->getClientOriginalName();
            $file->move('uploads', $filename);

            // Create a new Content instance for each image
            $content = new Content();
            $content->post_id = $post_id;
            $content->content = $filename;
            $content->save();

        }

       }

       if($request->file('content')){

        foreach ($request->file('content') as $index => $file) {
            $filename = $file->getClientOriginalName();
            $file->move('uploads', $filename);

            // Create a new Content instance for each image
            $content = new Content();
            $content->post_id = $post_id;
            $content->content = $filename;
            $content->save();

        }

       }



        return redirect()->back()->with('success', 'Content updated successfully.');
    }

    public function RemoveContent($id){
        Content::where('id', $id)->delete();
        return redirect()->back()->with('success', 'One Item Deleted');

    }


}
