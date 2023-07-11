<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'Python',
            'Html',
            'Css',
            'Javascript',
            'Bootstrap',
            'Php',
            'Laravel',
            'React',
            'Mysql',
            'Django',
        ];

        foreach ($courses as $course) {
            $obj = new Course();
            $obj->name = $course;
            $obj->save();
        }
    }
}
