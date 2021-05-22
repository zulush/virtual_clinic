<?php

use App\Http\Controllers\auth\UserRegisterController;
use App\Http\Controllers\auth\UserLoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\DoctorLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [UserLoginController::class, 'index'])->name('login');
Route::post('/login', [UserLoginController::class, 'login']);

Route::get('/login/doctor', [DoctorLoginController::class, 'index'])->name('login.doctor');
Route::post('/login/doctor', [DoctorLoginController::class, 'login']);
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/register', [UserRegisterController::class, 'index'])->name('register');
Route::post('/register', [UserRegisterController::class, 'store']);


Route::get('/calendar/doctor', [CalendarController::class, 'index'])->name('calendar');
Route::get('/calendar/set_wroking_days/doctor', [CalendarController::class, 'set_wroking_days'])->name('set_wroking_days');
Route::post('/calendar/set_wroking_days/doctor', [CalendarController::class, 'store_wroking_days'])->name('store_working_days');