<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'index'])->name('home');
Route::post('/store/data', [ProfileController::class, 'store'])->name('store.data');
Route::get('/edit/{id}', [ProfileController::class, 'edit'])->name('edit.data');
Route::put('/update/{id}', [ProfileController::class, 'update'])->name('update.data');
