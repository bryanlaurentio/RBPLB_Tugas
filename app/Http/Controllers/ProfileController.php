<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
//use App\Http\Requests\PasswordRequest;
use App\Rules\CurrentPasswordCheckRule;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->route('profile.edit');

    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords not matches
            //return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }
        //uncomment this if you need to validate that the new password is same as old one

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            //return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            return response()->json(['errors' => ['current'=> ['New Password cannot be same as your current password']]], 422);
        }
        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();
        return $user;
    }
}
