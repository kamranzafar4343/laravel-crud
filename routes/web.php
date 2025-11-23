<?php

use Illuminate\Support\Facades\Route;


//users
Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('index');

Route::get('/add', [App\Http\Controllers\UserController::class, 'add'])->name('add');
Route::post('/store', [App\Http\Controllers\UserController::class, 'store'])->name('store');

Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update');

Route::get('/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete');


//cars
Route::get('/cars', [App\Http\Controllers\CarController::class, 'cars'])->name('cars');

Route::get('/addCars', [App\Http\Controllers\CarController::class, 'addCars'])->name('addCars');
Route::post('/storeCars', [App\Http\Controllers\CarController::class, 'storeCars'])->name('storeCars');

Route::get('/editCars/{id}', [App\Http\Controllers\CarController::class, 'editCars'])->name('editCars');
Route::post('/updateCars/{id}', [App\Http\Controllers\CarController::class, 'updateCars'])->name('updateCars');

Route::get('/deleteCars/{id}', [App\Http\Controllers\UserController::class, 'deleteCars'])->name('deleteCars');
