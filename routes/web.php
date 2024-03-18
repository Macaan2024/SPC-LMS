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

Route::get('/', function () {
    return view('desktop/index');
});

Route::get('/header', function () {
    return view('desktop/layout/navhead');
});

//Route for Dashboard
Route::get('/dashboard', function () {
    return view('desktop/dashboard');
})->name('dashboard');

Route::get('/highschool', function () {
    return view('mobile_dashboard_highschool');
})->name('highschool');

Route::get('/college', function () {
    return view('mobile_dashboard_college');
})->name('college');

Route::get('/seniorhigh', function () {
    return view('mobile_dashboard_seniorhigh');
})->name('seniorhigh');

Route::get('/elementary', function () {
    return view('mobile_dashboard_elementary');
});

Route::get('/mobile-login', function () {
    return view('mobile_login_page');
});

// Route for Login Page
Route::get('/login', function () {
    return view('mobile.login');
})->name('login');

// Route for View All Page
Route::get('/viewAll', function () {
    return view('mobile.viewAll');
})->name('viewAll');

// Route for Search Book Page
Route::get('/searchBook', function () {
    return view('mobile.searchBook');
})->name('searchBook');

// Route for Search Page
Route::get('/search', function () {
    return view('mobile.search');
})->name('search');

Route::get('/mobile-login', function () {
    return view('mobile_login_page');
})->name('mobile-login');

