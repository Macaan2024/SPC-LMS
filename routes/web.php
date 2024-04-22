<?php

use App\Http\Controllers\pagesController\IndexController;
use App\Http\Controllers\pagesController\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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
// ADMIN 
Route::middleware(['auth', 'role_id:student'])->group(function () {
    Route::get("/student/dashboard", [HomeController::class, 'studentHome'])->name('home.student');
    Route::get('/fetch-data', [HomeController::class, 'fetchData'])->name('fetchData');
    
});

Route::post('/register', [UserController::class,'store'])->name('store');

// ------- LOGIN PROCESS -----//

Route::post('/process', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

//--------- PAGES ROUTES CONTROLLER -----
Route::get('/displayBook', [DashboardController::class, 'index']);
Route::get('/', [IndexController::class, 'index'])->name('login'); 
// Route::get('/student/dashboard', [dashboardController::class, 'index'])->name('dashboard');

Route::get('/asd', function () {
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
    return view('Users/admin/usermanagement');
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
Route::get('/desktop-viewtransaction', function() {
    return view('/desktop/viewtransaction');
})->name('desktop-viewtransaction');




//------------------------------------------


// ->>>>>>>>>>>>> LIST OF ROUTES MOBILE BELOW 
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
    return view('mobile/borrow_transaction');
});
Route::get('/returnTransactions', function () {
    return view('mobile/return_transactions');
}); 
//------ FINES BELOW
Route::get('/userFines', function () {
    return view('mobile/fines');
})->name('userFines');
// ------ PROFILE BELOW
Route::get('/userprofile', function () {
    return view('mobile/user_profile');
})->name('userprofile');


//-------------route for view all--------//
Route::get('/viewElectrical', function () {
    return view('mobile/view_all_electrical');
})->name('viewElectrical');

//----------book reservation--------//
Route::get('/reservation', function () {
    return view('mobile/request_reservation');
})->name('reservation');

//----------user notifications--------//
Route::get('/mobile-notification', function () {
    return view('mobile/dash_notification');
})->name('notification');
//----------book request---------//
Route::get('/bookrequest', function () {
    return view('mobile/book_request');
})->name('bookrequest');
//---------- USER TRANSACTION ------
Route::get('/mob-transaction', function () {
    return view('mobile/borrow_transaction');
})->name('borrow-transaction');
Route::get('/mob-returntransaction', function () {
    return view('mobile/return_transactions');
})->name('return-transaction');
//--------------- VIEW SPECIFIC borrow BOOK -----
Route::get('/mob-viewbook', function () {
    return view('mobile/viewbook');
})->name('mob-viewbook');
//--------------- VIEW SPECIFIC return BOOK -----
Route::get('/mob-viewbookreturn', function () {
    return view('mobile/viewbook_return');
})->name('mob-viewbookreturn');
//----------------------- logbook route
Route::get('/logbook', function () {
    return view('desktop/logbook');
});