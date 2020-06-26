<?php

use Illuminate\Database\Seeder;

use App\Faculty;

class FacultyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faculty::insert([
            ['code' => '1', 'name' => 'Fakultas Teknik Dan Ilmu Komputer'],
            ['code' => '2', 'name' => 'Fakultas Bisnis Dan Akuntansi'],
            ['code' => '3', 'name' => 'Fakultas Sastra'],
            ['code' => '4', 'name' => 'Fakultas Hukum'],
        ]);
    }
}
