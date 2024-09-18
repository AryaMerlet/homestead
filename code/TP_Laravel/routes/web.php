<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbsenceController;


Route::get('/',[UserController::class, 'index'])->name('home');

Route::resource('/',UserController::class);

Route::get('/',[AbsenceController::class, 'index'])->name('home');

Route::resource('/',AbsenceController::class);
