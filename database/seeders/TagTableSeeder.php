<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use App\Models\User;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->count(3)->create();

        foreach (Tag::all() as $tag) {
            $users = User::inRandomOrder()->take(rand(1,3))->pluck('id');
            $tag->users()->attach($users);
        }
    }
}
