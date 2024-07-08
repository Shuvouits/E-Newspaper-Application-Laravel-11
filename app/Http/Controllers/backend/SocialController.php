<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SocialSetting;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function Social()
    {
        $facebook = SocialSetting::where('key', 'facebook')->first();
        $twitter = SocialSetting::where('key', 'twitter')->first();
        $youtube = SocialSetting::where('key', 'youtube')->first();
        $linkedin = SocialSetting::where('key', 'linkedin')->first();
        $pinterest = SocialSetting::where('key', 'pinterest')->first();
        $instagram = SocialSetting::where('key', 'instagram')->first();
        return view('backend.social.index', compact('facebook','twitter', 'youtube', 'linkedin', 'pinterest', 'instagram'));
    }

    public function LogoSetting()
    {
        $logo = SocialSetting::where('key', 'logo')->first();
        return view('backend.social.logo-setting', compact('logo'));
    }

    public function InsertSocial(Request $request)
    {
        $validatedData = $request->validate([
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'youtube' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'pinterest' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',

        ]);


        foreach ($validatedData as $key => $value) {
            SocialSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );

        }

        return redirect()->back()->with('success', 'Advertise Updated');
    }

    public function InsertLogo(Request $request)
    {
        $validatedData = $request->validate([

            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048',
        ]);

        $data = [];

        if($request->hasFile('logo')){

            if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
                $data['logo'] = $request->file('logo')->getClientOriginalName();
                $request->file('logo')->move(public_path('uploads'), $data['logo']);
            }

            SocialSetting::updateOrCreate(
                ['key' => 'logo'],
                ['value' => $data['logo']]
            );


        }


        return redirect()->back()->with('success', 'Advertise Updated');
    }


}
