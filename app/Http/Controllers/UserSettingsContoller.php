<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserSettingsContoller extends Controller
{
    public function update_pfp(Request $request){
        $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();   
        if ($request->hasFile('profile_picture')) {
            // Store the uploaded file
            $path = $request->file('profile_picture')->store('public/images/profiles');
            // Update the user's profile picture
            $user->profile_picture = str_replace('public/', 'storage/', $path);
        }
        $user->save();
        return redirect()->back();
    }

    public function update_about(Request $request) {
        $request->validate([
            'about' => 'nullable|string|max:699',
        ]);
        $user = Auth::user();   
        $user->about = $request->about;
        $user->save();
        return redirect()->back();
    }
}
