<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Student;
use App\Course;
use App\Studyprogram;
use App\Studentcourse;
use App\Faculty;

use DB;

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

        return response()->json([
            'success' => 1,
            'message' => 'Data mahasiswa',
            'data' => $students
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
        $student = Student::with('faculty','studyprogram')
                    ->where('id', $id)
                    ->first();

        if (!$student) {
            return response()->json([
                'success' => 0,
                'message' => 'Data mahasiswa tidak ditemukan',
                'data' => []
            ]);
        }
        
        $studentcourses = DB::table('studentcourses')
                    ->join('courses', 'studentcourses.course_id', '=', 'courses.id')
                    ->where('studentcourses.student_id', $id)
                    ->orderBy('courses.code', 'asc')
                    ->get();

        $data = [
            'student' => $student,
            'studentcourses' => $studentcourses
        ];

        return response()->json([
            'success' => 1,
            'message' => 'Data mahasiswa ditemukan',
            'data' => $data
        ]);
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
        $student = Student::where('id', $id)
                    ->first();

        if (!$student) {
            return response()->json([
                'success' => 0,
                'message' => 'Data mahasiswa tidak ditemukan',
                'data' => []
            ]);
        }

        if (gettype($request->studyprogram) != "integer" || gettype($request->faculty) != "integer") {
            return response()->json([
                'success' => 0,
                'message' => 'Data program studi atau fakultas salah',
                'data' => []
            ]);
        }

        $currentCourse = Studentcourse::where('student_id', $id)
                            ->get();

        $selectedCourses_id = $request->courses;
        
        // courses add and delete
        $currentCourses_id = [];
        $addCourse = [];
        $deleteCourse = [];
        foreach ($currentCourse as $course) {
            array_push($currentCourses_id, $course->course_id);
        }

        // array diff(a, b); ada di array a tidak ada di array b
        $addCourse = array_diff($selectedCourses_id,$currentCourses_id);
        $deleteCourse = array_diff($currentCourses_id, $selectedCourses_id);

        // delete current course
        foreach ($deleteCourse as $dc) {
            Studentcourse::where('student_id', $id)
                ->where('course_id', $dc)
                ->delete();
        }

        // insert new course
        foreach ($addCourse as $ac) {
            Studentcourse::insert([
                ['student_id' => $id, 'course_id' => $ac],
            ]);
        }

        // update mahasiswa
        $student = Student::where('id', $id)
                    ->update([
                        'nim' => $request->nim,
                        'name' => $request->name,
                        'studyprogram_id' => $request->studyprogram,
                        'faculty_id' => $request->faculty
                    ]);

        $student = Student::with('faculty','studyprogram')
                    ->where('id', $id)
                    ->first();
        
        $studentcourses = DB::table('studentcourses')
                    ->join('courses', 'studentcourses.course_id', '=', 'courses.id')
                    ->where('studentcourses.student_id', $id)
                    ->orderBy('courses.code', 'asc')
                    ->get();

        $data = [
            'student' => $student,
            'studentcourses' => $studentcourses
        ];

        return response()->json([
            'success' => 1,
            'message' => 'Data mahasiswa berhasil diupdate',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::where('id', $id)
                    ->first();

        if (!$student) {
            return response()->json([
                'success' => 0,
                'message' => 'Data mahasiswa tidak ditemukan',
                'data' => []
            ]);
        }

        $courses = Studentcourse::where('student_id', $id)
                            ->delete();

        Student::where('id', $id)->delete();

        return response()->json([
            'success' => 0,
            'message' => 'Data mahasiswa tidak ditemukan',
            'data' => $student
        ]);
    }
}
