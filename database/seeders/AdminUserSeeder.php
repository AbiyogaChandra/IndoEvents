<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'), 
            'username' => 'admin',
            'level' => 'admin',
            'profile_id' => 20,
            'google_id' => null 
        ]);
    }
}
