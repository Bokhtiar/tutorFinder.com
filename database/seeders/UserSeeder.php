<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //this is admin area
        DB::table('users')->insert([
            "name" => 'admin',
            "role_id" => 1,
            "email" => 'admin@gmail.com',
            "password" => bcrypt(12345678)
        ]);

        //this is user area
        DB::table('users')->insert([
            "name" => 'user',
            "role_id" => 2,
            "email" => 'user@gmail.com',
            "password" => bcrypt(12345678)
        ]);
    }
}
