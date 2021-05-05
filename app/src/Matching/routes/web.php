<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/top', [UserController::class, 'top'])->name('top');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/match', [UserController::class, 'match'])->name('match');
Route::post('/update', [UserController::class, 'update'])->name('update');