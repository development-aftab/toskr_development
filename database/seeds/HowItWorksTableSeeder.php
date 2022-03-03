<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HowItWorksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('how_it_works')->delete();
        
        \DB::table('how_it_works')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-15 06:38:49',
                'updated_at' => '2021-11-15 06:38:49',
                'deleted_at' => NULL,
                'title' => 'Work the way you want',
                'description' => 'Toskr help you get organized, track every minute and ensure projects are delivered on time.',
                'image' => 'howitwork/LF6N7avwyTJJCDVDkEHmBOzb6RXtBs9QfLULthso.png',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-15 06:40:43',
                'updated_at' => '2021-11-15 06:40:43',
                'deleted_at' => NULL,
                'title' => 'Create your profile',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => 'howitwork/tVM0Aiysb8raYhZ3Ckl4MonJMG7AISazYinVbjHx.png',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-15 06:45:02',
                'updated_at' => '2021-11-15 06:45:02',
                'deleted_at' => NULL,
                'title' => 'Explore ways',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => 'howitwork/gZOfiACJ8j5s6k31eZVBRLs8gw5BKLABYh7xOVT0.png',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-15 06:45:32',
                'updated_at' => '2021-11-15 06:45:32',
                'deleted_at' => NULL,
                'title' => 'Get the task done',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'image' => 'howitwork/ZKhRbdS5nu3FJA3kuDjzmAKlngdBMmJ13Il5KAMx.png',
            ),
        ));
        
        
    }
}