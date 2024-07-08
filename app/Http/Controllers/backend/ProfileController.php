<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function Profile(){
        return view('backend.profile.index');
    }

    public function UpdateProfile(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
           'email' => [
            'required',
            'string',
            'lowercase',
            'email',
            'max:255',
            Rule::unique('users')->ignore(Auth::id()),
        ],
            'mobile' => 'nullable|number|max:15',
            'address' => 'nullable|string',
        ]);

        $user = User::findOrFail(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully');

    }

    public function Setting(){
        return view('backend.profile.setting');
    }
}
