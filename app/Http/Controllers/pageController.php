<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showHome(){
        return view('home');
    }

    public function showUser($id){
        return view('user', ['id' => $id]);
    }
}
