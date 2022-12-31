<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Series;
use App\Models\Topic;
use App\Models\Platform;
use App\Models\User;
use App\Models\Author;
use App\Models\Course;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $series = ['PHP','JavaScript','Wordpress','Laravel'];
        User::create([
            'name' => 'Rokon',
            'email' => 'rokon@gmail.com',
            'password' => bcrypt('rokon3888'),
            'type' => 1
        ]);
        $series = [
            [
                'name' => 'PHP',
                'image' => 'https://www.php.net/images/meta-image.png'
            ],
            [
                'name' => 'JavaScript',
                'image' => 'https://www.php.net/images/meta-image.png'
            ],
            [
                'name' => 'Wordpress',
                'image' => 'https://www.php.net/images/meta-image.png'
            ],
            [
                'name' => 'Laravel',
                'image' => 'https://www.php.net/images/meta-image.png'
            ],
        ];
        foreach($series as $item){
            Series::create([
                'name'=>$item['name'],
                'image'=>$item['image'],
            ]);
        }
        $topics = ['Eloquent','Validation','Authentication','Testing','Refactoring'];
        foreach($topics as $item){
            $slug = strtolower(str_replace(' ','-',$item));
            Topic::create([
                'name'=>$item,
                'slug'=>$slug
            ]);
        }
        $platforms = ['Laracasts','Youtube','Larajobs','Laravel News','Laracast Forum'];
        foreach($platforms as $item){
            Platform::create([
                'name'=>$item
            ]);
        }

        Author::factory(10)->create();

        // create 50 users
        User::factory(50)->create();

        // create 50 users
        Course::factory(50)->create();

        $courses = Course::all();
        foreach($courses as $course){
            $topics = Topic::all()->random(rand(1, 5))->pluck('id')->toArray();
            $course->topics()->attach($topics);

            $authors = Author::all()->random(rand(1, 3))->pluck('id')->toArray();
            $course->authors()->attach($authors);

            $series = Series::all()->random(rand(1, 4))->pluck('id')->toArray();
            $course->series()->attach($series);
        }

        Review::factory(100)->create();
    }
}
