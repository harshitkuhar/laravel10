<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class allUserController extends Controller
{
    public function showAllUsers(){
        $users = DB::table('all_users')->get();
        return view('allusers', ['data' => $users]);
    }

    public function showSingleUser($id){
        $user = DB::table('all_users')->where('id', $id)->get();
        return view('user', ['singleuser' => $user]);
    }
}
