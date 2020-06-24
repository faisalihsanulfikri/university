<?php

use Illuminate\Database\Seeder;

use App\Studyprogram;

class StudyprogramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Studyprogram::insert([
            ['code' => '001', 'name' => 'Teknik Informatika'],
            ['code' => '002', 'name' => 'Teknik Komputer'],
            ['code' => '003', 'name' => 'Teknik Industri'],
            ['code' => '004', 'name' => 'Teknik Elektro'],
            ['code' => '005', 'name' => 'Akuntansi'],
            ['code' => '006', 'name' => 'Hubungan Internasional'],
            ['code' => '007', 'name' => 'Desain Komunikasi Visual'],
            ['code' => '008', 'name' => 'Sastra Jepang'],
            ['code' => '009', 'name' => 'Hukum'],
        ]);
    }
}
