<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/', [UserController::class, 'store'])->name('user.store');
Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/{user}/destroy', [UserController::class, 'destroy'])->name('user.destroy');