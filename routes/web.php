<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;


Route::get('/', function () {
    return view('home');
});




