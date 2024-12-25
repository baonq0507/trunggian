<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'role' => 'user',
                'password' => Hash::make('12345678'),
                'status' => 'active',
                'balance' => 1000000,
            ]);
        }
    }
}
