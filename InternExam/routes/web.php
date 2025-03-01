<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;


//all users
Route::get('/', [UserController::class, 'index']);

//Active users
Route::get('/activeUsers', [UserController::class, 'activeUsers'])->name('isActive');

//Create Form
Route::get('/users/create', [UserController::class, 'create'])->name('create');

//Store User
Route::post('/users', [UserController::class, 'store']);

// Edit Form
Route::get('/users/{user}/edit', [UserController::class, 'edit']);

// Update User
Route::put('/users/{user}', [UserController::class, 'update']);

// Delete User
Route::delete('/users/{user}', [UserController::class, 'destroy']);

//Single User
Route::get('/users/{user}', [UserController::class, 'show']);
