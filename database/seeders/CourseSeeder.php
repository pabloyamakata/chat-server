<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laravelCourse = new Course();
        $laravelCourse->name = 'Laravel';
        $laravelCourse->description = 'Best PHP framework';
        $laravelCourse->category = 'Frameworks';
        $laravelCourse->save();
    }
}