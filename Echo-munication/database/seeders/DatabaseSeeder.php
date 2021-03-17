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
        
        Category::factory()->count(4)->create();
        User::factory()->count(10)->create();

        
        }
}