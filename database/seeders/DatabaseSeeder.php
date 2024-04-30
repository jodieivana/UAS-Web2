<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Book;
use App\Models\Bookshelf;
use App\Models\Article;
use App\Models\Review;
use App\Models\Feedback;
use App\Models\Notification;
use App\Models\Report;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password' =>bcrypt('admin123')
        ]);

        User::create([
            'name'=> 'jocallyn',
            'email'=> 'jocallyn@gmail.com',
            'password' =>bcrypt('jocallyn123')
        ]);

        $categories = ['Fiction', 'Thriller & Suspense', 'Mystery & Detective', 'Romance', 
        'Science Fiction & Fantasy', 'Nonfiction', 'Biography & Memoir', 'History',
        'Social Issues', 'Graphic Novels', 'Teens & Young Adult', "Children's"];

        foreach($categories as $category) {
            Category::create([
                'category_name' => $category
            ]);
        }

        User::factory(10)->create();
        Book::factory(100)->create();
        Bookshelf::factory(200)->create();
        Article::factory(20)->create();
        Review::factory(15)->create();
        Feedback::factory(200)->create();
        Notification::factory(10)->create();
        Report::factory(5)->create();
    }
}
