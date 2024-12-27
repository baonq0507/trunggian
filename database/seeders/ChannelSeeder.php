<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Channel;
use App\Models\User;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();
        for ($i = 0; $i < 10; $i++) {
            $channel = Channel::create([
                'name' => 'Channel ' . $i,
                'slug' => Str::slug('Channel ' . $i),
                'description' => 'Description ' . $i,
                'image' => 'image ' . $i,
                'is_private' => true,
                'is_active' => true,
                'status' => 'pending',
                'type' => 'buy',
                'created_by' => $user->id,
                'amount' => 1000,
            ]);


            $channel->userChannels()->create([
                'user_id' => $user->id,
                'status' => 'pending',
            ]);
        }
    }
}
