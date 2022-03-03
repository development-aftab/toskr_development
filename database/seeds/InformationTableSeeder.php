<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InformationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('information')->delete();
        
        \DB::table('information')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-16 04:56:57',
                'updated_at' => '2021-11-16 04:56:57',
                'deleted_at' => NULL,
                'phone' => '+1 123 456 7890',
                'email' => 'info@dreamstaff.com',
            ),
        ));
        
        
    }
}