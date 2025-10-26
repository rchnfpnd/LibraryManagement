<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowerController;
use App\Http\Controllers\BorrowRecordController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('borrowers', BorrowerController::class);
Route::resource('borrow_records', BorrowRecordController::class);
Route::resource('books', BookController::class);
