<?php

use Illuminate\Database\Seeder;

use App\Course;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            ['code' => 'c01', 'name' => 'Database'],
            ['code' => 'c02', 'name' => 'Pemrograman Dasar'],
            ['code' => 'c03', 'name' => 'Pemrigraman Lanjut'],
            ['code' => 'c04', 'name' => 'Artificial Inteligent'],
            ['code' => 'c05', 'name' => 'Keamanan Sistem Informasi'],
            ['code' => 'c06', 'name' => 'Etika Profesi'],
            ['code' => 'c07', 'name' => 'Rekayasa Perangkat Lunak'],
            ['code' => 'c08', 'name' => 'Algoritma Dan Pemrograman'],
            ['code' => 'c09', 'name' => 'Bahasa Indonesia'],
            ['code' => 'c10', 'name' => 'Bahasa Inggris'],
            ['code' => 'c11', 'name' => 'Kalkulus'],
            ['code' => 'c12', 'name' => 'Fisika'],
            ['code' => 'c13', 'name' => 'Animasi Dan Multimedia'],
        ]);
    }
}
