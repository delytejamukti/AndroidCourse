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
                'judul' => 'Basic ListView Demo: Android Programming',
                'diskripsi' => 'Learn how to make a basic ListView on Android Programming ',
                'nama_vidio' => 'vidio1.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'Custom ListView Demo: Android Programming',
                'diskripsi' => 'Learn how to customize ListView on Android Programming',
                'nama_vidio' => 'vidio2.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'How to Make a Button Open a New Activity - Android Studio Tutorial',
                'diskripsi' => 'This is a tutorial on Android Studio to make a button open a new activity',
                'nama_vidio' => 'vidio3.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'How to Create Welcome Screen (Splash Screen) in Android Studio',
                'diskripsi' => 'This is a tutorial on Android Studio to create welcome screen or splash screen',
                'nama_vidio' => 'vidio4.mkv',
            ),
             array (
                'is_advanced' => 0,
                'judul' => 'How To Learn Android App Development (2018)',
                'diskripsi' => 'This is a course about how android applications developed',
                'nama_vidio' => 'vidio5.mkv',
            ),
            array (
                'is_advanced' => 0,
                'judul' => 'Introduction to Android development with NetBeans and Maven',
                'diskripsi' => 'This is an introduction about NetBeans and Maven on Android development',
                'nama_vidio' => 'vidio6.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'How to use Fragments in Android - Android Advanced Tutorial ',
                'diskripsi' => 'This video explains how to use Fragments in Android',
                'nama_vidio' => 'vidio_Advance1.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Bottom App Bars and Top App Bars with Coordinator Layouts - Android Advanced Tutorial ',
                'diskripsi' => 'This video shows how to create action bars',
                'nama_vidio' => 'vidio_Advance2.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Bottom Navigation View - Android Advanced Tutorial ',
                'diskripsi' => "This video shows how to add a 'Bottom Navigation View' widget into Coordinator Layout",
                'nama_vidio' => 'vidio_Advance3.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Bottom Navigation Bar with Activities - Android Advanced Tutorial',
                'diskripsi' => 'This video shows how to add navigation to activities on the Bottom Navigation Bar (otherwise known as the BottomNavigationView widget)',
                'nama_vidio' => 'vidio_Advance4.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Retrofit, Volley, Glide, Picasso, Universal Image Loader [Comparison] - Android Advanced Tutorial',
                'diskripsi' => 'This video shows comparison between Retrofit, Volley, Glide, Picasso, and Universal Image Loader to download image from the web and give a view about which one is most suitable to the needs',
                'nama_vidio' => 'vidio_Advance5.mkv',
            ),
            array (
                'is_advanced' => 1,
                'judul' => 'Android JSON Retrofit Example [Parsing JSON Data from Web] - Android Advanced Tutorial ',
                'diskripsi' => 'This video gives an example about JSON data parsing from a website (ex: Reddit) with Retrofit',
                'nama_vidio' => 'vidio_Advance6.mkv',
            ),
            
        ));



 
    }
}
