<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mockery\Generator\Parameter;
use App\Models\User;
use Carbon\Carbon;
class UserSettingsContoller extends Controller
{
    public function update_pfp(Request $request){
        $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();   
        if ($request->hasFile('profile_picture')) {
            // Delete the current profile picture in database
            if($user->profile_picture != 'storage/images/profiles/default_profile.jpg') {   
                // Remove 'storage/' prefix
                $relative_filepath = str_replace('storage/', '', $user->profile_picture);
                //delete in storage
                Storage::disk('public')->delete($relative_filepath);
            }
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
            'about' => ['nullable', 'string', 'max:1200', 'regex:/^[\p{L}\p{N}\p{P}\p{Zs}]+$/u'],
        ]);
        $user = Auth::user();   
        $user->about = $request->about;
        $user->save();
        return redirect()->back();
    }

    public function update_skills(Request $request) {
        $user = Auth::user();   
        if ($user->skills()->exists()) {
            $user->skills()->detach();
        }
        //remove token value
        $skills = array_slice($request->all(), 1);
        foreach($skills as $key => $value) {
            $user->skills()->attach($value);
        }
        return redirect()->back();
    }

    public function testing() {
        $user = User::find(14);
        dd($user);
    }

    public function update_username(Request $request) {
        $request->validate([
            'username' => 'required|string|min:3|max:20|unique:users,username|alpha_num:ascii|alpha_dash:ascii'
        ]);

        $user = Auth::user();   
        $user->username = $request->username;
        $user->username_change = true;
        $user->save();
        return redirect()->back()->with('message','Way to go! Successfully changed username');
    }

    public function update_name(Request $request) {
        $request->validate([
            'first_name' => 'required|string|alpha:ascii|max:20|min:2',
            'last_name' => 'required|string|alpha:ascii|max:20|min:2',        
        ]);

        $user = Auth::user();   
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();
        return redirect()->back()->with('message','Your name has been changed');
    }

    public function update_dob(Request $request) {
        $request->validate(
            [
                'dob' => ['required', 'date', 'before:' . now()->subYears(12)->format('Y-m-d')],
            ], 
            [
                'dob.required' => 'Date of birth is required',
                'dob.date' => 'Please provide a valid date',
                'dob.before' => 'You must be at least 12 years old'
            ]
        );
    

        $user = Auth::user();   
        $user->dob = Carbon::createFromFormat('m/d/Y', $request->dob)->format('Y-m-d');
        $user->save();
        return redirect()->back()->with('message','Your date of birth has been changed');
    }
}
