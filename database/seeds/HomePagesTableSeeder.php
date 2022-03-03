<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomePagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('home_pages')->delete();
        
        \DB::table('home_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-15 05:51:53',
                'updated_at' => '2022-01-17 20:41:38',
                'deleted_at' => NULL,
                'title' => 'Where teams connect to testteteetete',
                'description' => 'samosa samosa',
                'image' => 'homepage/MKnvOCTu5mPqC69lQ3onS6X23Mz62r7FDkEyw9Ht.png',
            ),
        ));
        
        
    }
}