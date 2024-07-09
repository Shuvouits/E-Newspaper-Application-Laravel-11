<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\TopFooter;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function TopFooter(){
        $title_1 = TopFooter::where('key','title_1')->first();
        $title_2 = TopFooter::where('key','title_2')->first();
        $title_3 = TopFooter::where('key','title_3')->first();
        $office = TopFooter::where('key','office')->first();
        $mobile = TopFooter::where('key','mobile')->first();
        $email = TopFooter::where('key','email')->first();
        return view('backend.footer.top-footer', compact('title_1', 'title_2', 'title_3', 'office', 'mobile', 'email'));
    }

    public function BottomFooter(){
        $company = TopFooter::where('key','company')->first();
        $copyright = TopFooter::where('key','copyright')->first();
        return view('backend.footer.bottom-footer', compact('company','copyright'));
    }

    public function InsertTopFooter(Request $request)
    {
        $validatedData = $request->validate([
            'title_1' => ['required', 'string', 'max:255'],
            'title_2' => ['required', 'string', 'max:255'],
            'title_3' => ['required', 'string', 'max:255'],
            'office' => ['nullable', 'string', 'max:255'],
            'mobile' => ['required', 'digits:11'],
            'email' => ['required', 'email', 'max:255'],
            'copyright' => ['nullable', 'max:255'],
            'company' => ['nullable',  'max:255'],
        ]);

        foreach($validatedData as $key => $value) {
            TopFooter::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );

        }

        return redirect()->back()->with('success', 'Advertise Updated');
    }

    public function InsertBottomFooter(Request $request)
    {
        $validatedData = $request->validate([

            'copyright' => ['required', 'max:255'],
            'company' => ['required',  'max:255'],
        ]);

        foreach($validatedData as $key => $value) {
            TopFooter::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );

        }

        return redirect()->back()->with('success', 'Advertise Updated');
    }

}
