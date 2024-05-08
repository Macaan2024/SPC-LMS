<?php

use App\Http\Controllers\pagesController\IndexController;
use App\Http\Controllers\pagesController\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManagementController;

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

 

// ------- LOGIN PROCESS -----//

Route::post('/process', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');

//--------- PAGES ROUTES CONTROLLER -----
Route::get('/displayBook', [DashboardController::class, 'index']);
Route::get('/', [IndexController::class, 'index'])->name('login'); 
// Route::get('/student/dashboard', [dashboardController::class, 'index'])->name('dashboard');


Route::post('/register', [UserController::class,'store'])->name('store');
Route::get('/usermanagement', [UserController::class,'index']);
Route::get('/fetch-users', [UserManagementController::class, 'fetchUsers'])->name('fetch-users');
Route::delete('/delete-student/{id}', [UserManagementController::class, 'destroy'])->name('delete-student');
Route::get('/edit/{id}', [UserManagementController::class, 'edit'])->name('edit-student');