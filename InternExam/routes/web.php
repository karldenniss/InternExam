<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('users', [
        'heading' => 'List of all users',
        'users' => User::all()
    ]);
});

//Single User
Route::get(
    '/users/{id}',
    function ($id) {
        return view('user', [
            'user' => User::find($id)
        ]);
    }
);
