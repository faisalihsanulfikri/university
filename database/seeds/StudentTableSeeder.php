<?php

use Illuminate\Database\Seeder;

use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            ['nim' => '1010', 'name' => 'Faisal Ihsanul Fikri', 'studyprogram_id' => 1, 'faculty_id' => 1],
            ['nim' => '1011', 'name' => 'Yuni Destiani Putri', 'studyprogram_id' => 1, 'faculty_id' => 1],
            ['nim' => '1012', 'name' => 'Faturrohman Sidik Al Madani', 'studyprogram_id' => 1, 'faculty_id' => 1],
            ['nim' => '1013', 'name' => 'Fahmi Insan Adzikri', 'studyprogram_id' => 1, 'faculty_id' => 1],
            ['nim' => '1014', 'name' => 'Falah Farid Attalah', 'studyprogram_id' => 1, 'faculty_id' => 1],
            ['nim' => '1015', 'name' => 'Vicky Fajar Ramadhan', 'studyprogram_id' => 2, 'faculty_id' => 1],
            ['nim' => '1016', 'name' => 'M. Indranata Wijaya', 'studyprogram_id' => 2, 'faculty_id' => 1],
            ['nim' => '1017', 'name' => 'Rifki Dwi Madhani', 'studyprogram_id' => 5, 'faculty_id' => 2],
            ['nim' => '1018', 'name' => 'Ichsan Nurhakim', 'studyprogram_id' => 5, 'faculty_id' => 2],
            ['nim' => '1019', 'name' => 'Rendy Renaldy', 'studyprogram_id' => 5, 'faculty_id' => 2],
            ['nim' => '1020', 'name' => 'Lysana S', 'studyprogram_id' => 8, 'faculty_id' => 3],
            ['nim' => '1021', 'name' => 'Yenni N', 'studyprogram_id' => 9, 'faculty_id' => 4],
            ['nim' => '1022', 'name' => 'Fikri Haidar', 'studyprogram_id' => 1, 'faculty_id' => 1],
        ]);
    }
}
