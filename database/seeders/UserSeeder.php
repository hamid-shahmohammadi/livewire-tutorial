<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>Hash::make('password')
            ],
            [
                'name'=>'User',
                'email'=>'user@user.com',
                'password'=>Hash::make('password')
            ],
        ]);
    }
}
