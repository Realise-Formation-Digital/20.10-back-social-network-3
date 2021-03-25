<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Tutorial;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(5)->create();
        $categories = Category::factory(6)->create();

        $tutorials = Tutorial::factory(20)->make()
        ->each(function ($tutorial) use ($users, $categories) {
            $tutorial->user_id = $users->random()->id;
            $tutorial->category_id = $categories->random()->id;
            $tutorial->save();
        });

        Comment::factory(40)->make()
        ->each(function ($comment) use ($tutorials, $users) {
            $comment->tutorial_id = $tutorials->random()->id;
            $comment->user_id = $users->random()->id;
            $comment->save();
        });

        Like::factory(10)->make()
        ->each(function ($like) use ($tutorials, $users) {
            $like->tutorial_id = $tutorials->random()->id;
            $like->user_id = $users->random()->id;
            $like->save();
        });

    }
}