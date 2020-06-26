<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(FacultyTableSeeder::class);
        $this->call(StudyprogramTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(StudentTableSeeder::class);
        $this->call(StudentcourseTableSeeder::class);
    }
}
