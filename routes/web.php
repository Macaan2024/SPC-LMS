<?php
use App\Http\Controllers\Admin\BookRequestController;
use App\Http\Controllers\admin\UserFinesController;
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
    Route::post('/cancel.book/{id}', [TransactionController::class, 'cancel'])->name('cancel.book'); //cancel book
    Route::post('/start.book/{id}', [TransactionController::class, 'start'])->name('start.book'); //start borrow
    ROute::post('/return.book/{id}', [TransactionController::class, 'returnBook'])->name('return.book'); //returning borrow
    Route::get('/admin/transaction-view/{id}', [TransactionController::class, 'view'])->name('admin.transaction-view');

    //Userfines
    Route::get('/admin/userfines', [UserFinesController::class, 'index'])->name('admin.userfines');
    Route::post('/admin/finespaid/{id}', [UserFinesController:: class, 'finesPaid'])->name('admin.finespaid');

});


//Login Process
Route::get('/', [StudentIndexController::class, 'index'])->name('login'); 
Route::post('/process', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');



Route::get('/admin/usersmanagement', [UserManagementController::class, 'index'])->name('admin.usermanagement'); //index
Route::post('/student-registration', [UserManagementController::class, 'student'])->name('student.registration'); //student reg
Route::post('/faculty-registration', [UserManagementController::class, 'faculty'])->name('faculty.registration'); //faculty reg
Route::post('/librarystaff-registration', [UserManagementController::class, 'librarystaff'])->name('librarystaff-registration'); //staf reg
Route::get('/admin/usermanagement-view/{id}', [UserManagementController::class, 'view'])->name('usermanagement-view'); //view
Route::get('/admin/usermanagement-edit/{id}', [UserManagementController::class, 'show'])->name('usermanagement-edit'); //edit page
Route::put('edit/{id}', [UserManagementController::class, 'update'])->name('process.edit');
Route::get('/admin/usermanagement-delete/{id}', [UserManagementController::class, 'archieve'])->name('usermanagement-delete');  








//logbook
Route::get('/spc-lms/logbook', [LogbookLogsController::class, 'logbookLogs']);
