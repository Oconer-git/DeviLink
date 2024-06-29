<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Skill;

class UsersController extends Controller
{
    public function login() {
        return view('users.index');
    }

    public function main() {
        $view_data = array( 'first_name' => auth()->user()->first_name,
                            'last_name' => auth()->user()->last_name);
        return view('home.main', $view_data);
    }

    public function comments() {
        return view('home.comments');
    }

    public function profile($username) {
        // Get username info
        $user = User::where('username', $username)->firstOrFail(['first_name', 'last_name', 'about', 'profile_picture', 'username', 'id']);
        $viewdata['user'] = $user;
    
        // Retrieve unique skills for the specific user
        $user_skills = $user->skills()->pluck('skills.name', 'skills.id');
        
        // Retrieve all skill names and bg_colors from the skills table
        $skills = Skill::pluck('name', 'id');
        $skill_bg_colors = Skill::pluck('bg_color', 'id');
    
        $viewdata['user_skills'] = $user_skills;
        // Combine skills with their respective bg_colors
        foreach ($viewdata['user_skills'] as $id => $name) {
            if (isset($skill_bg_colors[$id])) {
                $viewdata['user_skills'][$id] = ['name' => $name, 'bg_color' => $skill_bg_colors[$id]];
            } else {
                $viewdata['user_skills'][$id] = ['name' => $name, 'bg_color' => null];
            }
        }

        // Filter out the user's skills from all skills to get skills the user doesn't have
        $viewdata['other_skills'] = $skills->diffKeys($user_skills);
        // Combine skills with their respective bg_colors
        foreach ($viewdata['other_skills'] as $id => $name) {
            if (isset($skill_bg_colors[$id])) {
                $viewdata['other_skills'][$id] = ['name' => $name, 'bg_color' => $skill_bg_colors[$id]];
            } else {
                $viewdata['other_skills'][$id] = ['name' => $name, 'bg_color' => null];
            }
        }

        if($username == Auth::user()->username) {
                return view('users.own_profile', $viewdata);
            }
            else {
                return view('users.profile', $viewdata);
            }

    }

        

    // for registering user account
    public function register(Request $request): RedirectResponse {
        $validated = $request->validate([
            'first_name' => 'required|string|alpha:ascii|max:30|min:2',
            'last_name' => 'required|string|alpha:ascii|max:30|min:2',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|min:3|max:30|unique:users,username|alpha:ascii',
            'password' => 'required|string|min:7|confirmed',
        ]);

        $validated['profile_picture'] = 'storage/images/profiles/default.jpg';
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        auth()->login($user);

        return redirect('/');
    } 

    // for logging in user
    public function login_user(Request $request): RedirectResponse {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/')->with('welcome_message','Welcome back!');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function testing() {
        $user = Auth::user();   
        $filepath = $user->profile_picture;

    // Remove 'storage/' prefix
        $relative_filepath = str_replace('storage/', '', $filepath);
        Storage::disk('public')->delete($relative_filepath);
    }
}
