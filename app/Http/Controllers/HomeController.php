<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Season;
use App\Models\Lesson;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id', 'desc')
            ->get();

        $courses = Course::orderBy('id', 'desc')
            ->get();

        $classrooms = Classroom::orderBy('id', 'desc')
            ->get();

        $teachers = Teacher::orderBy('id', 'desc')
            ->get();

        $seasons = Season::orderBy('id', 'desc')
            ->get();

        $lessons = Lesson::orderBy('id', 'desc')
            ->paginate(15);

        return view('home')
            ->with([
                'students' => $students,
                'courses' => $courses,
                'classrooms' => $classrooms,
                'teachers' => $teachers,
                'seasons' => $seasons,
                'lessons' => $lessons,
            ]);
    }
}
