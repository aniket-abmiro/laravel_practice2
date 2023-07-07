<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::truncate();
        Post::truncate();
        Category::truncate();


        Post::factory(10)->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'my family post',
        //     'slug' => 'my-first-post',
        //     'excerpt' => 'hfkjdsfk fhdjfd kjfkjdf kjfjd',
        //     'body' => 'fjbfhbdfhdf fhdbfbjf fdjfhjbfd wjkjahsd '
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'my work post',
        //     'slug' => 'my-second-post',
        //     'excerpt' => 'hfkjdsfk fhdjfd kjfkjdf kjfjd',
        //     'body' => 'fjbfhbdfhdf fhdbfbjf fdjfhjbfd wjkjahsd '
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'my personal post',
        //     'slug' => 'my-third-post',
        //     'excerpt' => 'hfkjdsfk fhdjfd kjfkjdf kjfjd',
        //     'body' => 'fjbfhbdfhdf fhdbfbjf fdjfhjbfd wjkjahsd '
        // ]);
    }
}
