<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            array (
                'name' => 'beginner',
                'email' => 'beginner@user.com',
                'password' => Hash::make('1234567'),
                'advanced' => 0,
            ),
            array (
                'name' => 'advanced',
                'email' => 'advanced@user.com',
                'password' => Hash::make('1234567'),
                'advanced' => 1,
            ),
        ));        
    }
}
