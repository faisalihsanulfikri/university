<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use App\Studyprogram;
use App\Studentcourse;
use App\Faculty;

use App\Charts\DashboardChart;

use DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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

        $studyProgramName = [];
        $studyProgramTotal = [];

        // 
        foreach ($studyProgram as $sp) {
            array_push($studyProgramName, $sp->name);
            array_push($studyProgramTotal, $sp->total);
        }

        $countStudent = count($student);

        $color = "rgba(22,160,133, 0.2)";

        $chart = new DashboardChart;
        $chart->labels($studyProgramName);
        $chart->dataset('Jumlah Mahasiswa', 'bar', $studyProgramTotal)
            ->color($color)
            ->backgroundcolor($color);

        $data = [
            'courses' => $courses,
            'studyProgram' => $studyProgram,
            'countStudent' => $countStudent,
            'chart' => $chart 
        ];

        return view('admin/admin', $data);
    }

    public function mahasiswa()
    {
        return view('admin/mahasiswa/mahasiswa');
    }
}
