<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            [
                "name" => "Bona",
                "lastName" => "Marouane",
                "age" => 23,
                "adress" => "Place de la minoterie 10",
                "role_id" => 1,
                "email" => "marouane@marouane.com",
                "password" => Hash::make("marouane@marouane.com")
            ],
            [
                "name" => "Sta",
                "lastName" => "FFFF",
                "age" => 27,
                "adress" => "Place de la minoterie 10",
                "role_id" => 3,
                "email" => "staff@staff.com",
                "password" => Hash::make("staff@staff.com")
            ],
            [
                "name" => "Admin",
                "lastName" => "EUH",
                "age" => 34,
                "adress" => "Place de la minoterie 10",
                "role_id" => 1,
                "email" => "admin@admin.com",
                "password" => Hash::make("admin@admin.com")
            ],
            [
                "name" => "Admin",
                "lastName" => "DEUHX",
                "age" => 56,
                "adress" => "Place de la minoterie 10",
                "role_id" => 1,
                "email" => "admin2@admin.com",
                "password" => Hash::make("admin2@admin.com")
            ],
            [
                "name" => "Admin",
                "lastName" => "TROIEUH",
                "age" => 19,
                "adress" => "Place de la minoterie 10",
                "role_id" => 1,
                "email" => "amdin3@admin.com",
                "password" => Hash::make("amdin3@admin.com")
            ],

        ]);
    }
}
