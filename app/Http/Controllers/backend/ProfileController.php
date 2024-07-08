<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


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
            'mobile' => 'nullable|string|max:15',
            'address' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,svg,webp|max:2048', // Adjust the validation rules as needed
        ]);


        if ($request->hasFile('avatar')) {
            $user = User::findOrFail(auth()->user()->id);
            if ($request->file('avatar')->isValid()) {
                // Delete the old avatar if it exists
                if ($user->avatar && file_exists(public_path('uploads/' . $user->avatar))) {
                    unlink(public_path('uploads/' . $user->avatar));
                }

                // Store the new avatar
                $avatar = $request->file('avatar')->getClientOriginalName();
                $request->file('avatar')->move(public_path('uploads'), $avatar);
                $user->avatar = $avatar;
                $user->save();
            }
        }


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

    public function PasswordReset(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', Password::min(8)->numbers(), 'confirmed'],
        ]);



        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password changed successfully');
    }
}
