<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class allUserController extends Controller
{
    public function showAllUsers(){
        $users = DB::table('all_users')->simplePaginate(2);
        return view('allusers', ['data' => $users]);
    }

    public function showSingleUser($id){
        $user = DB::table('all_users')->where('id', $id)->get();
        return view('user', ['singleuser' => $user]);
    }

    public function addUser(Request $req){
        $user = DB::table('all_users')
                    ->insertOrIgnore([
                        'name' => $req->user_name,
                        'email' => $req->user_email,
                        'age' => $req->user_age,
                        'city' => $req->user_city,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
        if($user) {
            return redirect()->route('showusers')->with('success','User created successfully!');
        }else{
            return redirect()->route('add.user')->with('error','Email ID already exist!');
        }
    }

    public function deleteUser($id){
        $user = DB::table('all_users')
                    ->where('id', $id)
                    ->delete();
        if($user) {
            return redirect()->route('showusers')->with('success', 'User deleted successfully!');
        }
    }

    public function getUserData($id){
        $userData = DB::table('all_users')->find($id);
        //return $userData;
        return view('updateuser', ['userdata' => $userData]);
    }

    public function updateuser(Request $req, $id){
        $udateuser = DB::table('all_users')
                    ->where('id', $id)
                    ->update([
                        'name' => $req->user_name,
                        'email' => $req->user_email,
                        'age' => $req->user_age,
                        'city' => $req->user_city
                    ]);
        if($udateuser) {
            return redirect()->route('showusers')->with('success','User updated successfully!');
        }
    }
}
