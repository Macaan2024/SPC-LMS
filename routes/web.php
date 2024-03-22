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
Route::get('/bookmanagement', function () {
    return view('/desktop/bookmanagement');
})->name('bookmanagement');

Route::get('/bookview', function() {
    return view('/desktop/bookview');
})->name('bookview');
Route::get('/bookedit', function() {
    return view('/desktop/bookedit');
})->name('bookedit');
Route::get('/bookinventory', function() {
    return view('/desktop/bookinventory');
})->name('bookinventory');
Route::get('/accountmanagement', function() {
    return view('/desktop/accountmanagement');
})->name('accountmanagement');
Route::get('/usermanagement', function() {
    return view('/desktop/usermanagement');
})->name('usermanagement');
Route::get('/userview', function() {
    return view('/desktop/userview');
})->name('userview');
Route::get('/transaction', function() {
    return view('/desktop/transaction');
})->name('transaction');
Route::get('/Reservation', function() {
    return view('/desktop/Reservation');
})->name('Reservation');




//------------------------------------------

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

//-------------route for view all--------//
Route::get('/viewElectrical', function () {
    return view('mobile/view_all_electrical');
})->name('viewElectrical');

//----------book reservation--------//
Route::get('/reservation', function () {
    return view('mobile/request_reservation');
})->name('reservation');

//----------user notifications--------//
Route::get('/notifications', function () {
    return view('mobile/notifications');
})->name('notifications');

// Route for the reservations page
Route::get('/reservations', function () {
    return view('reservations');
})->name('reservations');