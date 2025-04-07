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
            'email' => 'piyushkumawat90607@gmail.com',
            'email_verified_at' => now(), // Email verified set kar diya
            'password' => Hash::make('Piyush90607@'),
            'user_type' => 'admin',
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now(),
            'role' => 'admin',
        ]);
    }
}
