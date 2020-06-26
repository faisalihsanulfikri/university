<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use App\Studyprogram;
use App\Studentcourse;
use App\Faculty;

use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $courses = Course::get();
        $student = Student::get();
        $studyProgram = Studyprogram::get();
        $studentCourse = Studentcourse::get();

        // total student for every course
        foreach ($courses as $c) {
            $c->total = 0;
            foreach ($studentCourse as $sc) {
                if ($c->id == $sc->course_id) {
                    $c->total++;
                }
            }
        }

        // total student for every study program
        foreach ($studyProgram as $sp) {
            $sp->total = 0;
            foreach ($student as $s) {
                if ($sp->id == $s->studyprogram_id) {
                    $sp->total++;
                }
            }
        }

        $countStudent = count($student);

        $data = [
            'courses' => $courses,
            'studyProgram' => $studyProgram,
            'countStudent' => $countStudent,
        ];

        // return response()->json($data);

        return view('admin/admin', $data);
    }

    public function mahasiswa()
    {
        return view('admin/mahasiswa/mahasiswa');
    }
}
