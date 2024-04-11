<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\File;
use App\Models\allUser;

class allUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/users.json');
        $users = json_decode($json);

        foreach ($users as $user) {
            allUser::create([
                "name" => $user->name,
                "email" => $user->email,
                "age" => $user->age,
                "city" => $user->city,
            ]);
        }

        // $users = collect( json_decode($json) );

        // $users->each(function($user){
        //     allUser::create([
        //         'name' => $user->name,
        //     ]);
        // });
    }
}
