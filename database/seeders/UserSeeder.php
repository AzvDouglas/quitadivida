<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@hashmail.com',
            'password' => Hash::make('hashsolucoes'),
            'role' => 'admin',
        ]);
        
        DB::table('users')->insert([
            'name' => 'Common User',
            'email' => 'common@hashmail.com',
            'password' => Hash::make('password'),
            'role' => 'common',
        ]);
        
    }
}
