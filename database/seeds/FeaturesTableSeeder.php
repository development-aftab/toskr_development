<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('features')->delete();
        
        \DB::table('features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-15 06:07:20',
                'updated_at' => '2021-11-16 07:30:50',
                'deleted_at' => NULL,
                'title' => 'User friendly',
                'description' => 'Easy to use for people who are either new or professionals',
                'image' => 'features/MhaLIhMGB1zaciiBS20erIXGpwBbwRIlO0jX80yh.png',
                'slug' => 'friendly_button',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-15 06:10:07',
                'updated_at' => '2021-11-15 06:10:07',
                'deleted_at' => NULL,
                'title' => 'User Friendly System',
                'description' => 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily',
                'image' => 'features/OcrGH2AlXxQ1DdmoW7rrjM2N83tQZFOKHWvuE1hx.png',
                'slug' => 'friendly_title',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-15 06:12:00',
                'updated_at' => '2021-11-15 06:12:00',
                'deleted_at' => NULL,
                'title' => 'Trusted App',
                'description' => 'Official application that is trusted for security',
                'image' => 'features/MBbRZMMjfQKeHuSzSXyWgAmMKUHQGxrQTeka0bDd.png',
                'slug' => 'Trusted_button',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-15 06:12:39',
                'updated_at' => '2021-11-15 06:12:39',
                'deleted_at' => NULL,
                'title' => 'Trusted App',
                'description' => 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily',
                'image' => 'features/bBW7jM4qr5L6BmXFLXNFH5UqzzmZfwZkUJEqtzU7.png',
                'slug' => 'Trusted_title',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-11-15 06:13:16',
                'updated_at' => '2021-11-15 06:13:16',
                'deleted_at' => NULL,
                'title' => 'Flexiblility',
                'description' => 'Task can be opened on all existing devices',
                'image' => 'features/fa7IGkg5RyjYZaS5Yg4Uvr9oBUb8SqYUi6cXboID.png',
                'slug' => 'Flexiblility_button',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-11-15 06:14:02',
                'updated_at' => '2021-11-15 06:14:02',
                'deleted_at' => NULL,
                'title' => 'Flexiblility',
                'description' => 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily',
                'image' => 'features/1UB9T0V3SR9n8AKcBJRY5WIywSxU4UFhvAUK3Ea9.png',
                'slug' => 'Flexiblility_title',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-11-15 06:14:46',
                'updated_at' => '2021-11-15 06:14:46',
                'deleted_at' => NULL,
                'title' => '100% Free',
                'description' => 'This application is completely free, without any charge',
                'image' => 'features/LQ07FDDhx24sLlqaSwyTw3ZK6k8nFZQwbs8pLpCc.png',
                'slug' => 'Free_button',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2021-11-15 06:15:30',
                'updated_at' => '2021-11-15 06:15:30',
                'deleted_at' => NULL,
                'title' => '100% Free System',
                'description' => 'Tasking is very easy to use, besides that it also has many excellent features that other task managers don\'t have, so task management can be done easily',
                'image' => 'features/RPRXy3RDnfoTwydVyJpjCJumhUodkLnxFRf4wPMz.png',
                'slug' => 'Free_title',
            ),
        ));
        
        
    }
}