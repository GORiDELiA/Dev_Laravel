<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HomeController;
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

Route::get('/{any}', function() {
    return view('app');
})->where('any', '.*');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/index', [TodoController::class, 'index']);
// Route::get('/create', [TodoController::class, 'create']);
// Route::post('/upload', [TodoController::class, 'upload']);
// Route::get('/{id}/edit', [TodoController::class, 'edit']);
// Route::patch('/update', [TodoController::class, 'update']);
// Route::get('/{id}/completed', [TodoController::class, 'completed']);
// Route::get('/{id}/delete', [TodoController::class, 'delete']);
// Route::post('/logout', [HomeController::class, 'index']);

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
