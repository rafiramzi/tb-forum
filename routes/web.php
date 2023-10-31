<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/home', 'App\Http\Controllers\posthandler@postingan');
Route::get('/home/', 'App\Http\Controllers\posthandler@postingan');
Route::get('/home/like', 'App\Http\Controllers\posthandler@likepost');


