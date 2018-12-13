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
        // // DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // DB::table('courses')->truncate();

        // $courses = [];
        // $faker = Factory::create();

        // for($i = 1; $i <=10; $i++)
        // {
        //     $courses[] = [
        //         'is_advanced' => rand(0,1),
        //         'judul' => $faker->sentence(rand(7,10)),
        //         'diskripsi' => $faker->text(rand(100,150)),
        //         'nama_vidio' => $faker->sentence(rand(7,10)),
        //     ];
        // }

        // DB::table('courses')->insert($courses);

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
            
        ));



 
    }
}
