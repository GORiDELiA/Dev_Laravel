<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // ログインしていない場合ログイン画面に遷移
    public function returnView(){
        return redirect('login')->with('status', 'ログインしてください');
    }
    // top画面へ遷移
    public function top() {
        if (Auth::check()) {
            return view('top');
        } else {
            return $this->returnView();
        }
    }
    // home画面へ遷移
    public function home() {
        if (Auth::check()) {
            return view('home');
        } else {
            return $this->returnView();
        }
    }
    // match画面へ遷移
    public function match() {
        if (Auth::check()) {
            return view('match');
        } else {
            return $this->returnView();
        }
    }
    // profile画面へ遷移
    public function profile() {
        if (Auth::check()) {
            return view('user/profile');
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
