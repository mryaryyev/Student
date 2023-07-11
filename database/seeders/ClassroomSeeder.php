<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            'A1',
            'A2',
            'B1',
            'B2',
            'C1',
            'C2',
            'D1',
            'D2',
            'E1',
            'E2',
        ];

        foreach ($classrooms as $classroom) {
            $obj = new Classroom();
            $obj->name = $classroom;
            $obj->save();
        }
    }
}
