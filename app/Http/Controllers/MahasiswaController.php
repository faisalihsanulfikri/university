<?php

namespace App\Http\Controllers;

use App\Student;
use App\Course;
use App\Studyprogram;
use App\Studentcourse;
use App\Faculty;

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
    public function store()
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
        
        $studentcourses = DB::table('studentcourses')
                    ->join('courses', 'studentcourses.course_id', '=', 'courses.id')
                    ->where('studentcourses.student_id', $id)
                    ->orderBy('courses.code', 'asc')
                    ->get();

        $data = [
            'id' => $id,
            'section' => 'mahasiswa_detail',
            'student' => $student,
            'studentcourses' => $studentcourses
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
        $courses = Course::get();
        $faculties = Faculty::get();
        $studyprograms = Studyprogram::get();
        $student = Student::with('faculty','studyprogram')
                    ->where('id', $id)
                    ->first();
        
        $studentcourses = DB::table('studentcourses')
                    ->join('courses', 'studentcourses.course_id', '=', 'courses.id')
                    ->where('studentcourses.student_id', $id)
                    ->get();

        foreach ($courses as $i => $c) {
            $c->checked = false;
            foreach ($studentcourses as $j => $sc) {
                if ($c->id == $sc->course_id) {
                    $c->checked = true;
                }
            }
        }

        $data = [
            'id' => $id,
            'section' => 'mahasiswa_edit',
            'student' => $student,
            'studentcourses' => $studentcourses,
            'courses' => $courses,
            'studyprograms' => $studyprograms,
            'faculties' => $faculties,
        ];

        return view('admin/mahasiswa/mahasiswa', $data);
    }

    
    public function update(Request $request, $id)
    {
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

        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Studentcourse::where('student_id', $id)
                            ->delete();

        $student = Student::where('id', $id)
                    ->delete();

        return redirect()->route('mahasiswa');
    }
}
