<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function top() {
        return view('welcome');
    }

    public function home() {
        if (Auth::check()) {
            return view('home');
        } else {
            return view('auth/login');
        }
    }

    public function profile() {
        return view('welcome');
    }

    public function edit() {
        return view('welcome');
    }

    public function update() {
        return view('welcome');
    }
}
