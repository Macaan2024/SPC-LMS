<?php

use App\Http\Controllers\Admin\BookRequestController;
use App\Http\Controllers\Logbook\LogbookLogsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Student\StudentIndexController;
use App\Http\Controllers\Student\RequestBooksController;
use App\Http\Controllers\Admin\BookManagementController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogBookController;
use App\Http\Controllers\Admin\TransactionController;


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
// STUDENT----------------------->
Route::middleware(['auth', 'role_id:1'])->group(function () {

    //dashboard process

    Route::get('/spc-lms/request-books/{id}', [StudentIndexController::class, 'requestBook'])->name('spc-lms.request-book'); //view book
    Route::post('spc-lms/process-book/{id}', [StudentIndexController::class, 'processBook'])->name('spc-lms.process-book'); //operate requestbook function
    
    Route::get('/fetch-level-books', [StudentIndexController::class, 'fetchLevelBook'])->name('fetch-level-books');
    Route::get('/spc-lms/dashboard', [StudentIndexController::class, 'dashboard'])->name('spc-lms.dashboard');
    Route::get('/spc-lms/category/{category}', [StudentIndexController::class, 'view'])->name('spc-lms.category');
    Route::post('/spc-lms/category/searchBook', [StudentIndexController::class, 'search'])->name('spc-lms.category.searchBook');

    //boook Request page
    Route::get('spc-lms/book-requests', [RequestBooksController::class, 'index'])->name('spc-lms.requestbooks'); //view page
    Route::post('spc-lms/spc-lms.cancel/{id}', [RequestBooksController::class, 'cancel'])->name('spc-lms.cancel'); //operate cancellation function
    Route::get('spc-lms/view_requestbook/{id}', [RequestBooksController::class, 'viewRequestBook'])->name('spc-lms.view_requestbook');
});


//ADMiN------------------------->
Route::middleware(['auth', 'role_id:2'])->group(function (){



    //Dashboard
    Route::get('/admin/index', [DashboardController::class, 'index'])->name('admin.index');

    //User Management
    Route::post('/register', [UserManagementController::class,'store'])->name('store'); //add users
    Route::get('/admin/usersmanagement', [UserManagementController::class,'index'])->name('admin.usermanagement'); //index
    Route::get('/fetch-users', [UserManagementController::class, 'fetchUsers'])->name('fetch-users'); // ajax fetching user
    Route::delete('/delete-student/{id}', [UserManagementController::class, 'destroy'])->name('delete-student'); // delete
    Route::get('/admin/edit/{id}', [UserManagementController::class, 'show'])->name('modification'); // modify
    Route::put('/edit/{id}', [UserManagementController::class, 'update'])->name('edit'); 
    Route::get('/admin/view/{id}', [UserManagementController::class, 'view'])->name('view');

    //Book Management         
    Route::get('/admin/booksmanagement', [BookManagementController::class, 'index'])->name('admin.bookmanagement');
    Route::get('/fetch-books', [BookManagementController::class, 'fetchBooks']);
    Route::post('/admin.store', [BookManagementController::class, 'store'])->name('admin.store');
    Route::delete('/delete-book/{id}', [BookManagementController::class, 'destroy'])->name('delete-book');

    //Book Request
    Route::get('/admin/bookrequest/', [BookRequestController::class, 'index'])->name('admin.bookrequest');
    Route::post('/approve-request/{id}', [BookRequestController::class, 'approveRequest'])->name('approve.request');
    Route::post('/decline-request/{id}', [BookRequestController::class, 'declineRequest'])->name('decline.request');


    //Logbook
    Route::get('/admin/logbook', [LogBookController::class, 'Userslist'])->name('admin.logbook');

    //Transaction
    Route::get('/admin/transaction', [TransactionController::class, 'index'])->name('admin.transaction');
    ROute::get('/return.book/{id}', [TransactionController::class, 'returnBook'])->name('return.book');
});


//Login Process
Route::get('/', [StudentIndexController::class, 'index'])->name('login'); 
Route::post('/process', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');













//logbook
Route::get('/spc-lms/logbook', [LogbookLogsController::class, 'logbookLogs']);
