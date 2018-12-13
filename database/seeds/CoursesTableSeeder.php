<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('courses')->delete();
        \DB::table('courses')->insert(array (
            array (
                'is_advanced' => 0,
                'judul' => 'Basic List View Demo',
                'diskripsi' => 'diskripsi',
                'nama_vidio' => 'vidio1.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'Basic List View Demo 2',
                'diskripsi' => 'diskripsi 2',
                'nama_vidio' => 'vidio2.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'Basic List View Demo 3',
                'diskripsi' => 'diskripsi 3',
                'nama_vidio' => 'vidio3.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'Basic List View Demo 4',
                'diskripsi' => 'diskripsi 4',
                'nama_vidio' => 'vidio4.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'Basic List View Demo 5',
                'diskripsi' => 'diskripsi 5',
                'nama_vidio' => 'vidio5.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'Basic List View Demo 6',
                'diskripsi' => 'diskripsi 6',
                'nama_vidio' => 'vidio6.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Basic List View Demo Advance',
                'diskripsi' => 'diskripsi Advance',
                'nama_vidio' => 'vidio_Advance1.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Basic List View Demo 2 Advance',
                'diskripsi' => 'diskripsi 2 Advance',
                'nama_vidio' => 'vidio_Advance2.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Basic List View Demo 3 Advance',
                'diskripsi' => 'diskripsi 3',
                'nama_vidio' => 'vidio_Advance3.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Basic List View Demo 4 Advance',
                'diskripsi' => 'diskripsi 4 Advance',
                'nama_vidio' => 'vidio_Advance4.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Basic List View Demo 5 Advance',
                'diskripsi' => 'diskripsi 5 Advance',
                'nama_vidio' => 'vidio_Advance5.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Basic List View Demo 6 Advance',
                'diskripsi' => 'diskripsi 6 Advance',
                'nama_vidio' => 'vidio_Advance6.mkv',
            ),
            
        ));



 
    }
}
