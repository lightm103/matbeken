<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'admin@gmail.com',
            'password' => bcrypt('admin123456'),
            'role' => '1',
            'status' => true,
        ]);
    }
}

