<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function returnView(){
        return redirect('login')->with('status', 'ログインしてください');
    }

    public function top() {
        if (Auth::check()) {
            return view('home');
        } else {
            return $this->returnView();
        }
    }
    public function home() {
        if (Auth::check()) {
            return view('home');
        } else {
            return $this->returnView();
        }
    }
    public function profile() {
        if (Auth::check()) {
            return view('user/profile');
        } else {
            return $this->returnView();
        }
    }
    public function match() {
        if (Auth::check()) {
            return view('match');
        } else {
            return $this->returnView();
        }
    }
    public function update() {
        if (Auth::check()) {
            return view('welcome');
        } else {
            return $this->returnView();
        }
    }
}
