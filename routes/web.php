<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\BookManagement;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\Student\StudentIndexController;


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
<<<<<<< HEAD
// ADMIN 
Route::middleware(['auth', 'role_id:1'])->group(function () {
    Route::get('/spc-lms/dashboard', [StudentIndexController::class, 'dashboard'])->name('spc-lms.dashboard');
    Route::get('/spc-lms/category/{category}', [StudentIndexController::class, 'view'])->name('spc-lms.category');
    Route::post('/spc-lms/category/searchBook', [StudentIndexController::class, 'search'])->name('spc-lms.category.searchBook');});













Route::middleware(['auth', 'role_id:2'])->group(function (){

    
    Route::get('/admin/index', [AdminIndexController::class, 'index'])->name('admin.index');

            


=======
<<<<<<< HEAD
//--------- ROUTES FOR DESKTOP BELOW -----
=======

>>>>>>> 50855653f786d7e69c593876cc15c78d49d68a4c
Route::get('/', function () {
    return view('desktop/index');
})->name('index');
>>>>>>> d85f81cfe8af0ab8e2c25e873f7326a89a494978

});

<<<<<<< HEAD
=======
//Route for Dashboard
Route::get('/dashboard', function () {
<<<<<<< HEAD
    return view('/desktop/dashboard');
})->name('dashboard');
Route::get('/bookmanagement', function () {
    return view('/desktop/bookmanagement');
})->name('bookmanagement');
>>>>>>> d85f81cfe8af0ab8e2c25e873f7326a89a494978

Route::post('/register', [UserManagementController::class,'store'])->name('store');
Route::get('/admin/usersmanagement', [UserManagementController::class,'index'])->name('admin.usermanagement');
Route::get('/fetch-users', [UserManagementController::class, 'fetchUsers'])->name('fetch-users');
Route::delete('/delete-student/{id}', [UserManagementController::class, 'destroy'])->name('delete-student');
Route::get('/admin/edit/{id}', [UserManagementController::class, 'show'])->name('modification');
Route::put('/edit/{id}', [UserManagementController::class, 'update'])->name('edit');
Route::get('/admin/view/{id}', [UserManagementController::class, 'view'])->name('view');

Route::get('/admin/booksmanagement', [BookManagement::class, 'index'])->name('admin.bookmanagement');
Route::get('/fetch-books', [BookManagement::class, 'fetchBooks']);
Route::post('/admin.store', [BookManagement::class, 'store'])->name('admin.store');
Route::delete('/delete-book/{id}', [BookManagement::class, 'destroy'])->name('delete-book');



<<<<<<< HEAD
Route::get('/fetch-level-books', [StudentIndexController::class, 'fetchLevelBook'])->name('fetch-level-books');
Route::get('/', [StudentIndexController::class, 'index'])->name('login'); 
Route::post('/process', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
=======

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
=======
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

>>>>>>> 50855653f786d7e69c593876cc15c78d49d68a4c
>>>>>>> d85f81cfe8af0ab8e2c25e873f7326a89a494978
