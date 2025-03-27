<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com', // Yahan apna email set karein
            'password' => Hash::make('123456'), // Yahan apna password set karein
            'user_type' => 'admin', // Agar aapke users table me role ka column ho
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
