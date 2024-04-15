<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\allUserController;


Route::get('/', function () {
    return view('home');
});


Route::get('/all-users', [allUserController::class, 'showAllUsers'])->name('showusers');

Route::get('/user/{id}', [allUserController::class, 'showSingleUser'])->name('showsingleuser');




