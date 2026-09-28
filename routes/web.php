<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Resource Routes Praktikum Pertemuan 2
Route::resource('books', BookController::class);
Route::resource('categories', CategoryController::class)->except(['show']);
Route::resource('members', MemberController::class);
Route::resource('loans', LoanController::class);
Route::put('/loans/{id}/kembalikan', [LoanController::class, 'kembalikan'])
    ->name('loans.kembalikan');

// Tugas Pertemuan 2: Route Group dengan prefix /admin
Route::prefix('admin')->group(function () {
    Route::get('/info', function () {
        return 'Panel Informasi Administrator Perpustakaan';
    })->name('admin.info');
});