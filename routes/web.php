<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buyer', function () {
    return view('buyer');
});
Route::get('/addbuyer', function () {
    return view('addbuyer');
});
Route::get('/shareholder', function () {
    return view('shareholder');
});

Route::get('/addshareholder', function () {
    return view('addshareholder');
});
