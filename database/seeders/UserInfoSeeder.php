<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserInfo;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            UserInfo::create([
                'user_id' => $user->id,
                'cccd' => '1234567890',
                'phone' => '0987654321',
                'address' => '1234567890',
                'avatar' => '1234567890',
                'cccd_image_front' => '1234567890',
                'cccd_image_back' => '1234567890',
                'birthday' => '1234567890',
                'gender' => '1234567890',
            ]);
        }

    }
}
