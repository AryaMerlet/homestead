<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotifController;
use App\Http\Controllers\AbsenceController;

Route::get('/',[MotifController::class, 'index'])->name('home');

Route::resource('motif', MotifController::class);
Route::get('motif/{motif}/restore', [MotifController::class, 'restore'])->withTrashed()->name('motif.restore');
