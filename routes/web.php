<?php

use App\Http\Controllers\Logbook\LogbookLogsController;
use App\Http\Controllers\Logbook\LogbooksController;
use App\Http\Controllers\QrcodeController;
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
// ADMIN 
Route::middleware(['auth', 'role_id:1'])->group(function () {

    Route::post('spc-lms/process-book', [StudentIndexController::class, 'processBook'])->name('spc-lms.process-book');
    Route::get('/spc-lms/request-books/{id}', [StudentIndexController::class, 'requestBook'])->name('spc-lms.request-book');
    Route::get('/fetch-level-books', [StudentIndexController::class, 'fetchLevelBook'])->name('fetch-level-books');
    Route::get('/spc-lms/dashboard', [StudentIndexController::class, 'dashboard'])->name('spc-lms.dashboard');
    Route::get('/spc-lms/category/{category}', [StudentIndexController::class, 'view'])->name('spc-lms.category');
    Route::post('/spc-lms/category/searchBook', [StudentIndexController::class, 'search'])->name('spc-lms.category.searchBook');
});













Route::middleware(['auth', 'role_id:2'])->group(function (){

    
    Route::get('/admin/index', [AdminIndexController::class, 'index'])->name('admin.index');

            



});


Route::post('/register', [UserManagementController::class,'store'])->name('store');
Route::get('/admin/usersmanagement', [UserManagementController::class,'index'])->name('admin.usermanagement');
Route::get('/fetch-users', [UserManagementController::class, 'fetchUsers'])->name('fetch-users');
Route::delete('/delete-student/{id}', [UserManagementController::class, 'destroy'])->name('delete-student');
Route::get('/admin/edit/{id}', [UserManagementController::class, 'show'])->name('modification');
Route::put('/edit/{id}', [UserManagementController::class, 'update'])->name('edit');
Route::get('/admin/view/{id}', [UserManagementController::class, 'view'])->name('view');


//Qr Code Routes
Route::get('/admin/logbook', [QrcodeController::class, 'Userslist'])->name('admin.logbook');

Route::get('/admin/booksmanagement', [BookManagement::class, 'index'])->name('admin.bookmanagement');
Route::get('/fetch-books', [BookManagement::class, 'fetchBooks']);
Route::post('/admin.store', [BookManagement::class, 'store'])->name('admin.store');
Route::delete('/delete-book/{id}', [BookManagement::class, 'destroy'])->name('delete-book');




Route::get('/', [StudentIndexController::class, 'index'])->name('login'); 
Route::post('/process', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');



//logbook
Route::get('/spc-lms/logbook', [LogbookLogsController::class, 'logbookLogs']);
