<?php

use App\Http\Controllers\auth\UserRegisterController;
use App\Http\Controllers\auth\UserLoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\DoctorLoginController;
use App\Http\Controllers\DoctorsListController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\AppointementController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ConsultationController;
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
Route::get('/calendar/set_working_days/doctor', [CalendarController::class, 'set_working_days'])->name('set_working_days');
Route::post('/calendar/store_working_days/doctor', [CalendarController::class, 'store_working_days'])->name('store_working_days');
Route::get('/calendar/add_working_times/doctor', [CalendarController::class, 'add_working_times'])->name('add_working_times');
Route::post('/calendar/store_wroking_times/doctor', [CalendarController::class, 'store_wroking_times'])->name('store_working_times');

Route::get('/list/doctor', [DoctorsListController::class, 'index'])->name('doctors_list');
Route::get('/infos/doctor/{doctor_id}', [DoctorsListController::class, 'getDoctor'])->name('doctor_infos');


Route::get('/doctor/{doctor}/ask_for_appointement', [AppointementController::class, 'index'])->name('add_appointement');
Route::post('/store_appointment/{doctor_id}', [AppointementController::class, 'store'])->name('store_appointment');
Route::get('/doctor/appointements', [AppointementController::class, 'get_appointements'])->name('get_appointements');
Route::get('/doctor/confirmed_appointements', [AppointementController::class, 'get_confirmed_appointements'])->name('get_confirmed_appointements');
Route::post('/valid_appointment/{appointment_id}/{patient_id}', [AppointementController::class, 'valid_appointment'])->name('valid_appointment');
Route::post('/valid_appointment_substitute/{appointment_id}/{patient_id}', [AppointementController::class, 'valid_appointment_substitute'])->name('valid_appointment_substitute');
Route::post('/delete_appointment/{appointment_id}', [AppointementController::class, 'delete_appointment'])->name('delete_appointment');

Route::get('/getWorkingTimes', [AppointementController::class, 'getWorkingTimes']);

Route::get('/notifications', [NotificationController::class, 'index'])->name('unreaded_notifications');
Route::post('/readed_notification/{notification_id}', [NotificationController::class, 'readed_notification'])->name('readed_notification');

Route::get('/doctor/get_appointements_patient', [AppointementController::class, 'get_appointements_patient'])->name('get_appointements_patient');

Route::post('/add_consultation/{appointment_id}', [ConsultationController::class, 'add_consultation'])->name('add_consultation');
Route::post('/add_medicament/{consultation_id}', [ConsultationController::class, 'add_medicament'])->name('add_medicament');

