<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::post('/addforum', [AdminController::class, 'addforum'])->name('addforum');
});
Route::group(['prefix' => 'user', 'middleware' => 'role:user'], function () {
    Route::get('/', [UserController::class, 'index'])->name('user');
    Route::get('/postinganku', [UserController::class, 'postinganku'])->name('postinganku');
    Route::get('/forumku', [UserController::class, 'forumku'])->name('forumku');
    Route::post('/addpost', [UserController::class, 'addpost'])->name('addpost');
});

Auth::routes();
