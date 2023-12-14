<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BestFriend;

class BestFriendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bestFriend = new BestFriend;
        $bestFriend->name = "Mr Smith";
        $bestFriend->user_id = 1;
        $bestFriend->save();
        BestFriend::factory()->count(9)->create();
    }
}
