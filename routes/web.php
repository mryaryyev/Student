<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(\App\Http\Controllers\HomeController::class)
    ->group(function (){
        Route::get('/', 'index')->name('home');
    });

Route::controller(\App\Http\Controllers\StudentController::class)
    ->group(function (){
        Route::get('student/{id}', 'show')->name('student.show');
    });

Route::controller(\App\Http\Controllers\CourseController::class)
    ->group(function (){
        Route::get('course/{id}', 'show')->name('course.show');
    });

Route::controller(\App\Http\Controllers\ClassroomController::class)
    ->group(function (){
        Route::get('classroom/{id}', 'show')->name('classroom.show');
    });

Route::controller(\App\Http\Controllers\TeacherController::class)
    ->group(function (){
        Route::get('teacher/{id}', 'show')->name('teacher.show');
    });

Route::controller(\App\Http\Controllers\SeasonController::class)
    ->group(function (){
        Route::get('season/{id}', 'show')->name('season.show');
    });