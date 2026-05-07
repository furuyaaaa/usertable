<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = User::query()->orderBy('id')->get();

    return view('users.index', compact('users'));
});
