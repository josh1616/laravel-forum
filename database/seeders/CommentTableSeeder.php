<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $comment = new Comment;
        $comment->text = "Lorem ipsum dolar sit amet consecutar";
        $comment->post_id = 1;
        $comment->user_id = 1;
        $comment->likes = 10;
        $comment->dislikes = 2;
        $comment->save();

        Comment::factory()->count(60)->create();
    }
}
