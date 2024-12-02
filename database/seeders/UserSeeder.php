<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('users')->insert([
            "name" => "admin",
            "email"=>"admin@gmail.com",
            "password"=>Hash::make("12345")

        ]);
        Db::table('users')->insert([
            "name" => "user",
            "email"=>"user@gmail.com",
            "password"=>Hash::make("12345")

        ]);
    }
}
