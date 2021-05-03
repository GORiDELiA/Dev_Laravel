<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [UserController::class, 'top'])->name('top');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');
Route::get('/edit', [UserController::class, 'edit'])->name('edit');
Route::post('/update', [UserController::class, 'update'])->name('update');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
