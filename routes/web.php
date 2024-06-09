<?php


use App\Http\Controllers\Student\StudentProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

//Student / Faculty Controller ----
use App\Http\Controllers\Student\StudentIndexController;
use App\Http\Controllers\Student\RequestBooksController;
use App\Http\Controllers\Student\StudentTransactionController;
use App\Http\Controllers\Student\FinesController;

//Admin Controller
use App\Http\Controllers\Admin\BookManagementController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogBookController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\BookRequestController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserFinesController;

//Logbook
use App\Http\Controllers\Logbook\Logbook;


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

    //dashboard process
    Route::middleware(['auth', 'role_id:2,1,3,4'])->group(function (){

        Route::get('/spc-lms/request-books/{id}', [StudentIndexController::class, 'requestBook'])->name('spc-lms.request-book'); //view book
        Route::post('spc-lms/process-book/{id}', [StudentIndexController::class, 'processBook'])->name('spc-lms.process-book'); //operate requestbook function
        
        Route::get('/spc-lms/index', [StudentIndexController::class, 'index'])->name('spc-lms.index'); //index or dashboard
    
        Route::get('/spc-lms/category/{category}', [StudentIndexController::class, 'view'])->name('spc-lms.category');//viewing category books
        Route::post('/spc-lms/category/searchBook', [StudentIndexController::class, 'search'])->name('spc-lms.category.searchBook'); //search function
    
        //boook Request page
        Route::get('spc-lms/book-requests', [RequestBooksController::class, 'index'])->name('spc-lms.requestbooks'); //view page
        Route::post('spc-lms/spc-lms.cancel/{id}', [RequestBooksController::class, 'cancel'])->name('spc-lms.cancel'); //operate cancellation function
        Route::get('spc-lms/view_requestbook/{id}', [RequestBooksController::class, 'viewRequestBook'])->name('spc-lms.view_requestbook');

        //Transaction
        Route::get('spc-lms/transaction', [StudentTransactionController::class, 'index'])->name('spc-lms.transaction');
        Route::get('spc-lms/transaction-view/{id}', [StudentTransactionController::class, 'view'])->name('spc-lms.transactionview');

        //Fines 
        Route::get('spc-lms/fines', [FinesController::class, 'index'])->name('spc-lms.fines');

        //Profile 
        Route::get('/spc-lms/profile/{id}', [StudentProfileController::class, 'index'])->name('spc-lms.profile');
        //Changepassword
        Route::get('/spc-lms/changepassowrd/{id}', [StudentProfileController::class, 'change'])->name('spc-lms.changepassword');
        Route::post('spc-lms/process-passowrd/{id}', [StudentProfileController::class, 'proccess'])->name('spc-lms.process-password');

        //Notification

        Route::get('/student-notification', [NotificationController::class, 'UserNotification'])->name('student-notifiaction');


    });




//ADMiN------------------------->
Route::middleware(['auth', 'role_id:2'])->group(function (){

    //notifiaction retrieving 

    Route::get('/fetching-notification', [NotificationController::class, 'collectNotification'])->name('fetching-notifiaction');


    //profile
    Route::get('/admin/profile/{id}', [ProfileController::class, 'show'])->name('admin.profile');
    ROute::get('/admin/changepassword/{id}', [ProfileController::class, 'changePassword'])->name('admin.changepassword');

    //index
    Route::get('/admin/index', [DashboardController::class, 'index'])->name('admin.index'); 
    Route::get('/admin/fetch-users', [DashboardController::class, 'getUserStats']);

    Route::get('/admin/bookavailable_list', [DashboardController::class, 'bookAvailable'])->name('admin.bookavailable.list'); //stats for available books
    Route::get('/admin/bookunavailable_list', [DashboardController::class, 'bookUnavailable'])->name('admin.bookunavailable.list'); //stats for unavailable books
    Route::get('/admin/bookelementary_list', [DashboardController::class, 'bookElementary'])->name('admin.bookelementary.list'); //stats for elementary
    Route::get('/admin/bookjuniorhigh_list', [DashboardController::class, 'bookJuniorHigh'])->name('admin.bookjuniorhigh.list'); //stats for juniorhigh
    Route::get('/admin/bookseniorhigh_list', [DashboardController::class, 'bookSeniorHigh'])->name('admin.bookseniorhigh.list'); //stats for seniorhigh
    Route::get('/admin/bookcollege_list', [DashboardController::class, 'bookCollege'])->name('admin.bookcollege.list'); //stats for college

    Route::get('/admin/usercollege_list', [DashboardController::class, 'userCollege'])->name('admin.usercollege.list'); //stats for college
    Route::get('/admin/userseniorhigh_list', [DashboardController::class, 'userSeniorHigh'])->name('admin.userseniorhigh.list'); //stats for seniorhigh
    Route::get('/admin/userjuniorhigh_list', [DashboardController::class, 'userJuniorHigh'])->name('admin.userjuniorhigh.list'); //stats for juniorhigh
    Route::get('/admin/userelementary_list', [DashboardController::class, 'userElementary'])->name('admin.userelementary.list'); //stats for elementary
    Route::get('/admin/userfaculty_list', [DashboardController::class, 'userFaculty'])->name('admin.userfaculty.list'); //stats for faculty
    Route::get('/admin/userlibrarystaff_list', [DashboardController::class, 'userStaff'])->name('admin.userstaff.list'); //stats for library staff
    Route::get('/admin/transactionongoing', [DashboardController::class, 'transactionOngoing'])->name('admin.transactionongoing.list'); //stats for transaction ongoing
    Route::get('/admin/transactionreturned', [DashboardController::class, 'transactionReturned'])->name('admin.transactionreturned.list'); //stats for transaction returned
    Route::get('/admin/transactioncancel', [DashboardController::class, 'transactionCancel'])->name('admin.transactioncancel.list'); //stats for transaction returned
    Route::get('/admin/transactionwithoverdue', [DashboardController::class, 'transactionWithOverdue'])->name('admin.transactionwithoverdue.list'); //stats for transaction with overdue










    //User Management
    Route::get('/admin/usersmanagement', [UserManagementController::class, 'index'])->name('admin.usermanagement'); //index
    Route::post('/student-registration', [UserManagementController::class, 'student'])->name('student.registration'); //student reg
    Route::post('/faculty-registration', [UserManagementController::class, 'faculty'])->name('faculty.registration'); //faculty reg
    Route::post('/librarystaff-registration', [UserManagementController::class, 'libraryStaff'])->name('librarystaff.registration'); //staf reg
    Route::get('/admin/usermanagement-view/{id}', [UserManagementController::class, 'view'])->name('usermanagement-view'); //view
    Route::get('/admin/usermanagement-edit/{id}', [UserManagementController::class, 'show'])->name('usermanagement-edit'); //edit page
    Route::put('edit/{id}', [UserManagementController::class, 'update'])->name('process.edit'); //process edit
    Route::get('/admin/usermanagement-delete/{id}', [UserManagementController::class, 'archieve'])->name('usermanagement-delete');  //process delete
    //Book Management         
    Route::get('/admin/booksmanagement', [BookManagementController::class, 'index'])->name('admin.bookmanagement');
    Route::get('/admin/bookview/{id}', [BookManagementController::class, 'view'])->name('admin.bookview');
    Route::post('/admin.store', [BookManagementController::class, 'store'])->name('admin.store');
    Route::get('/admin.edit/{id}', [BookManagementController::class, 'edit'])->name('admin.edit');
    Route::put('/update.book/{id}', [BookManagementController::class, 'update'])->name('update.book');
    Route::get('/delete-book/{id}', [BookManagementController::class, 'destroy'])->name('admin.delete.book');

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
    Route::post('/process.payment/{id}', [UserFinesController::class, 'processPayment'])->name('process.payment');
    Route::get('/admin/fines-history', [UserFinesController::class, 'history'])->name('fines-history');
    Route::get('/admin/view-fines/{id}', [UserFinesController::class, 'view'])->name('view-fines');
});


//Login Process
Route::get('/', function(){
    return view('index');
})->name('login'); 

Route::post('/process', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');











//logbook

Route::get('/spc-lms/logbook', [Logbook::class, 'index'])->name('spc-lms.logbook');
Route::post('/spc-lms/scan', [Logbook::class, 'store'])->name('spc-lms.scan');