<?php

use Illuminate\Database\Seeder;

class HistoryViewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('history_view')->delete();
        \DB::table('history_view')->insert(array (
            array (
                'id_user' => '1',
                'id_vidio' => '1',
            ),
            array (
                'id_user' => '1',
                'id_vidio' => '2',
            ),
            array (
                'id_user' => '1',
                'id_vidio' => '3',
            ),
            array (
                'id_user' => '1',
                'id_vidio' => '4',
            ),
            array (
                'id_user' => '1',
                'id_vidio' => '5',
            ),
        ));    
    }
}
