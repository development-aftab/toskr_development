<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('faqs')->delete();
        
        \DB::table('faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-15 06:49:44',
                'updated_at' => '2021-11-15 06:49:44',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-15 06:50:56',
                'updated_at' => '2021-11-15 06:50:56',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-15 06:51:13',
                'updated_at' => '2021-11-15 06:51:13',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-15 06:51:22',
                'updated_at' => '2021-11-15 06:51:22',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-11-15 06:49:44',
                'updated_at' => '2021-11-15 06:49:44',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-11-15 06:50:56',
                'updated_at' => '2021-11-15 06:50:56',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-11-15 06:51:13',
                'updated_at' => '2021-11-15 06:51:13',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2021-11-15 06:51:22',
                'updated_at' => '2021-11-15 06:51:22',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2021-11-15 06:51:22',
                'updated_at' => '2021-11-15 06:51:22',
                'deleted_at' => NULL,
                'question' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            ),
        ));
        
        
    }
}