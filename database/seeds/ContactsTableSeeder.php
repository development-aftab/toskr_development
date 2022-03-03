<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-16 05:33:07',
                'updated_at' => '2021-11-16 05:33:07',
                'deleted_at' => NULL,
                'name' => 'sam . ali',
                'email' => 'zuhi@yhoo.com',
                'phone' => '0321321235',
                'message' => 'asdasdasdasd',
                'state' => 'ssss',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-16 05:38:43',
                'updated_at' => '2021-11-16 05:38:43',
                'deleted_at' => NULL,
                'name' => 'aliza ali',
                'email' => 'alizssz@admin.com',
                'phone' => '0321321235',
                'message' => 'assssssssssssssssssssssssssssssssss',
                'state' => 'ssss',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-16 05:46:30',
                'updated_at' => '2021-11-16 05:46:30',
                'deleted_at' => NULL,
                'name' => 'zain . ali',
                'email' => 'zainzzzz@truck.com',
                'phone' => '0321321235',
                'message' => 'sasddddddddddddddddd',
                'state' => 'ssss',
            ),
        ));
        
        
    }
}