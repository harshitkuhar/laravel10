<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\allUserController;



Route::get('/', [allUserController::class, 'showAllUsers'])->name('showusers');

Route::get('/user/{id}', [allUserController::class, 'showSingleUser'])->name('showsingleuser');

Route::post('/user', [allUserController::class, 'addUser'])->name('addUser');

Route::get('/delete-user/{id}', [allUserController::class, 'deleteUser'])->name('deleteuser');

Route::get('/get-user-data/{id}', [allUserController::class, 'getUserData'])->name('getuserdata');

Route::post('/update-user/{id}', [allUserController::class, 'updateuser'])->name('updateuserdata');

Route::view('/add-user', 'adduser')->name('add.user');





