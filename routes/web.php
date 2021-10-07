<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::middleware('role:admin')->get('/admin', [AdminController::class, 'index'])->name('admin');

Route::middleware('role:user')->get('/user', function () {
    return view('users.user');
})->name('user');

Route::get('/postinganku', function () {
    return view('users.postinganku');
});

Route::get('/forumku', function () {
    return view('users.forumku');
});


Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/login', function () {
    return view('auth.login');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
