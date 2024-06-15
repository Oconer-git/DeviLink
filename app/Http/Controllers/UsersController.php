<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function login() {
        return view('users.index');
    }

    public function main() {
        return view('home.main');
    }

    public function comments() {
        return view('home.comments');
        }
}
