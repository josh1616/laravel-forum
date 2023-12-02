<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $post = new Post;
        $post->text = "Lorem ipsum dolar sit amet consecutar";
        $post->likes = 10;
        $post->dislikes = 2;
        $post->user_id = 1;
        $post->save();

        Post::factory()->count(20)->create();
    }
}
