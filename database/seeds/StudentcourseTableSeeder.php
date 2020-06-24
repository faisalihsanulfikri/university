<?php

use Illuminate\Database\Seeder;

use App\Studentcourse;

class StudentcourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Studentcourse::insert([
            // student 1
            ['student_id' => 1, 'course_id' => 1],
            ['student_id' => 1, 'course_id' => 2],
            ['student_id' => 1, 'course_id' => 4],
            ['student_id' => 1, 'course_id' => 5],
            ['student_id' => 1, 'course_id' => 7],
            ['student_id' => 1, 'course_id' => 8],
            // student 2
            ['student_id' => 2, 'course_id' => 1],
            ['student_id' => 2, 'course_id' => 2],
            ['student_id' => 2, 'course_id' => 4],
            ['student_id' => 2, 'course_id' => 5],
            ['student_id' => 2, 'course_id' => 7],
            ['student_id' => 2, 'course_id' => 8],
            // student 3
            ['student_id' => 3, 'course_id' => 1],
            ['student_id' => 3, 'course_id' => 2],
            ['student_id' => 3, 'course_id' => 3],
            ['student_id' => 3, 'course_id' => 6],
            ['student_id' => 3, 'course_id' => 9],
            ['student_id' => 3, 'course_id' => 10],
        ]);
    }
}
