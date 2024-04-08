<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showUser(){
        return "<h1>Welcome to Controller</h1>";
    }
}
