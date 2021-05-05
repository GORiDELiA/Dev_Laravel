<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function top() {
        return view('top');
    }

    public function home() {
        if (Auth::check()) {
            return view('home');
        } else {
            return view('auth/login');
        }
    }

    public function profile() {
        if (Auth::check()) {
            return view('user/profile');
        } else {
            return view('auth/login');
        }
    }

    public function match() {
        if (Auth::check()) {
            return view('match');
        } else {
            return view('auth/login');
        }
    }

    public function update() {
        if (Auth::check()) {
            return view('welcome');
        } else {
            return view('auth/login');
        }
    }
}
