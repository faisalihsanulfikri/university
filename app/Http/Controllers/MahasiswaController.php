<?php

namespace App\Http\Controllers;

use App\Student;

use DB;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('faculty','studyprogram')->get();

        $data = [
            'section' => 'mahasiswa_data',
            'students' => $students
        ];
        return view('admin/mahasiswa/mahasiswa', $data);
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
        $student = Student::with('faculty','studyprogram')
                    ->where('id', $id)
                    ->first();
        
        $courses = DB::table('studentcourses')
                    ->join('courses', 'studentcourses.course_id', '=', 'courses.id')
                    ->where('studentcourses.student_id', $id)
                    ->get();

        $data = [
            'id' => $id,
            'section' => 'mahasiswa_detail',
            'student' => $student,
            'courses' => $courses
        ];
        return view('admin/mahasiswa/mahasiswa', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'id' => $id,
            'section' => 'mahasiswa_edit'
        ];
        return view('admin/mahasiswa/mahasiswa', $data);
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
