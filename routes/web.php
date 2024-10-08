<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\ReportsController;   
use App\Http\Controllers\ConfigController;     
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // 

Route::group(['middleware' => 'check.role:dashboard'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::group(['middleware' => 'check.role:reports'], function () {
    Route::get('/reports', [ReportsController::class, 'index'])->name('reports'); 
});

Route::group(['middleware' => 'check.role:configuration'], function () {
    Route::get('/configuration', [ConfigController::class, 'index'])->name('configuration');
});


Route::get('users/add', [UserController::class, 'showAddUserForm'])->name('users.add');
Route::post('users/add', [UserController::class, 'addUser']);
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);