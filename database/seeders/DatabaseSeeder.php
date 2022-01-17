<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Category::truncate();
        // $mgmg = User::factory()->create(['name' => 'mgmg', 'username' => 'mgmg']);
        // $kyawkyaw = User::factory()->create(['name' => 'kyawkyaw', 'username' => 'kyawkyaw']);

        Category::factory()->create(['name' => 'N5 Level', 'slug' => 'n5_level']);
        Category::factory()->create(['name' => 'N4 Level', 'slug' => 'n4_level']);
        Category::factory()->create(['name' => 'N3 Level', 'slug' => 'n3_level']);

        // Post::factory(3)->create(['category_id' => $japaneseN5->id, 'user_id' => $mgmg->id]);
        // Post::factory(3)->create(['category_id' => $japaneseN4->id, 'user_id' => $mgmg->id]);
        // Post::factory(3)->create(['category_id' => $japaneseN3->id, 'user_id' => $kyawkyaw->id]);
    }
}
