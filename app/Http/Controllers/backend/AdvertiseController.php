<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\LeftAdvertisement;
use App\Models\RightAdvertise;
use App\Models\User;
use Illuminate\Http\Request;

class AdvertiseController extends Controller
{
    public function LeftAdvertise(){
        $firstImage = LeftAdvertisement::where('key', 'first_image')->first();
        $secondImage = LeftAdvertisement::where('key', 'second_image')->first();
        $thirdImage = LeftAdvertisement::where('key', 'third_image')->first();
        return view('backend.advertise.left-advertise', compact('firstImage', 'secondImage', 'thirdImage'));
    }

    public function RightAdvertise(){
        $firstImage = RightAdvertise::where('key', 'first_image')->first();
        $secondImage = RightAdvertise::where('key', 'second_image')->first();
        return view('backend.advertise.right-advertise', compact('firstImage', 'secondImage'));
    }

    public function InsertLeftAdvertise(Request $request)
    {
        $request->validate([
            'first_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048', // Adjust the validation rules as needed
            'second_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048',
            'third_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048',
        ]);

        $data = [];

        if ($request->hasFile('first_image') && $request->file('first_image')->isValid()) {
            $data['first_image'] = $request->file('first_image')->getClientOriginalName();
            $request->file('first_image')->move(public_path('uploads'), $data['first_image']);
        }

        if ($request->hasFile('second_image') && $request->file('second_image')->isValid()) {
            $data['second_image'] = $request->file('second_image')->getClientOriginalName();
            $request->file('second_image')->move(public_path('uploads'), $data['second_image']);
        }

        if ($request->hasFile('third_image') && $request->file('third_image')->isValid()) {
            $data['third_image'] = $request->file('third_image')->getClientOriginalName();
            $request->file('third_image')->move(public_path('uploads'), $data['third_image']);
        }

        foreach ($data as $key => $value) {
            LeftAdvertisement::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Advertise Updated');
    }

    public function InsertRightAdvertise(Request $request)
    {
        $request->validate([
            'first_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048', // Adjust the validation rules as needed
            'second_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048',

        ]);

        $data = [];

        if ($request->hasFile('first_image') && $request->file('first_image')->isValid()) {
            $data['first_image'] = $request->file('first_image')->getClientOriginalName();
            $request->file('first_image')->move(public_path('uploads'), $data['first_image']);
        }

        if ($request->hasFile('second_image') && $request->file('second_image')->isValid()) {
            $data['second_image'] = $request->file('second_image')->getClientOriginalName();
            $request->file('second_image')->move(public_path('uploads'), $data['second_image']);
        }



        foreach ($data as $key => $value) {
            RightAdvertise::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Advertise Updated');
    }




}
