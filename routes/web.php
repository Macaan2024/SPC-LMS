<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/asd', function () {
    return view('desktop/index');
});

Route::get('/header', function () {
    return view('desktop/layout/navhead');
});

Route::get('/dashboard', function () {
    return view('/desktop/dashboard');
});
Route::get('/highschool', function () {
    return view('/mobile_dashboard_highschool');
});
Route::get('/college', function () {
    return view('/mobile_dashboard_college');
});
Route::get('/seniorhigh', function () {
    return view('/mobile_dashboard_seniorhigh');
});
Route::get('/elementary', function () {
    return view('/mobile_dashboard_elementary');
});