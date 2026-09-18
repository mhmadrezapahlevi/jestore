<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/transaction', [TransactionController::class, 'store'])->name('transaction.store');
Route::get('/transaction/success/{orderId}', [TransactionController::class, 'success'])->name('transaction.success');
Route::get('/cek-transaksi', [TransactionController::class, 'check'])->name('transaction.check');
Route::post('/cek-transaksi', [TransactionController::class, 'track'])->name('transaction.track');