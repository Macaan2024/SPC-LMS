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
//--------- ROUTES FOR DESKTOP BELOW -----
Route::get('/', function () {
    return view('desktop/index');
})->name('index');

Route::get('/header', function () {
    return view('desktop/layout/navhead');
});

Route::get('/dashboard', function () {
    return view('/desktop/dashboard');
})->name('dashboard');

// ROUTES FOR SELECTION YEAR IN LANDING PAGE BELOW
Route::get('/highschool', function () {
    return view('mobile/landing_page_highschool');
})->name('highschool');
Route::get('/college', function () {
    return view('mobile/landing_page_college');
})->name('college');
Route::get('/seniorhigh', function () {
    return view('mobile/landing_page_seniorhigh');
})->name('seniorhigh');
Route::get('/elementary', function () {
    return view('mobile/landing_page_elementary');
})->name('elementary');
// ----------------- END --------------------------

// ROUTES FOR SELECTION YEAR IN DASH BOARD BELOW 
Route::get('/dashboard-highschool', function () {
    return view('mobile/dash_page_highschool');
})->name('dashboard-highschool');
Route::get('/dashboard-college', function () {
    return view('mobile/dash_page_college');
})->name('dashboard-college');
Route::get('/dashboard-seniorhigh', function () {
    return view('mobile/dash_page_seniorhigh');
})->name('dashboard-seniorhigh');
Route::get('dashboard-elementary', function () {
    return view('mobile/dash_page_elementary');
})->name('dashboard-elementary');
// -------------------- END -----------

Route::get('/borrowTransactions', function () {
    return view('mobile/borrow_transactions');
});
Route::get('/returnTransactions', function () {
    return view('mobile/return_transactions');
});
Route::get('/userFines', function () {
    return view('mobile/fines');
});
Route::get('/userProfile', function () {
    return view('mobile/user_profile');
});
Route::get('/viewElectrical', function () {
    return view('mobile/view_all_electrical');
});
Route::get('/reservation', function () {
    return view('mobile/requesst_reservation');
});