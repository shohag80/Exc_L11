<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Md. Shohag Hossain',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456'),
            'phone_number' => '01975134226',
        ]);
    }
}
