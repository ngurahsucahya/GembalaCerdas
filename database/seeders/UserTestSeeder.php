<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin1234'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Doctor',
            'email' => 'doctor@email.com',
            'password' => bcrypt('doctor1234'),
            'role' => 'doctor'
        ]);

        DB::table('users')->insert([
            'name' => 'Employee',
            'email' => 'employee@email.com',
            'password' => bcrypt('employee1234'),
            'role' => 'employee'
        ]);
    }
}
