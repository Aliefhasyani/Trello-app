<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB; // <-- Add this

class SeederData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password'=> Hash::make('admin123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Teacher',
                'email' => 'teacher@gmail.com',
                'password'=> Hash::make('teacher123'),
                'role' => 'teacher'
            ],
            [
                'name' => 'Student',
                'email' => 'student@gmail.com',
                'password'=> Hash::make('student123'),
                'role' => 'student'
            ]
        ]);
    }
}
