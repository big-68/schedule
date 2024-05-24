<?php

use App\Http\Controllers\CallingScheduleController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SchoolClassesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/login', 'login')->middleware('guest')->name('login');
    Route::get('/register', 'register')->middleware('auth')->name('register');
    Route::get('/profile', 'profile')->middleware('auth')->name('profile');
    Route::get('/schedule', 'schedule')->middleware('auth')->name('schedule');
    Route::get('/users/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
});

Route::controller(UsersController::class)->group(function () {
    Route::post('/register', 'store')->middleware('auth')->name('auth.register');
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/logout', 'destroy')->middleware('auth')->middleware('auth')->name('logout');
    Route::post('/update/{user}', 'update')->middleware('auth')->name('update');
    Route::post('add/student', 'addStudent')->middleware('auth')->name('add.student');
});

Route::controller(ClassroomController::class)->group(function () {
    Route::post('/create/classroom', 'store')->middleware('auth')->name('create.classroom');
    Route::post('/update/classrooms/{classroom}', 'update')->middleware('auth')->name('update.classroom');
    Route::post('/delete/classrooms/{classroom}', 'destroy')->middleware('auth')->name('destroy.classroom');
});

Route::controller(SchoolClassesController::class)->group(function () {
    Route::get('/class', 'show')->name('class');
    Route::post('/add/class', 'store')->name('add.class');
    Route::post('/update/classes/{class}', 'update')->name('update.class');
    Route::post('/delete/classes/{class}', 'destroy')->name('destroy.class');
})->middleware('auth');
Route::controller(CallingScheduleController::class)->group(function () {
    Route::post('/add/call', 'store')->middleware('auth')->name('add.call');
});

Route::controller(ScheduleController::class)->group(function () {
    Route::post('/add/schedule', 'store')->name('add.schedule');
});
