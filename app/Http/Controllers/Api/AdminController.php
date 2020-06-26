<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $data = [
            'courses' => $courses,
            'studyProgram' => $studyProgram,
            'countStudent' => $countStudent
        ];

        return response()->json([
            'success' => 1,
            'message' => 'Data dashboard',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
