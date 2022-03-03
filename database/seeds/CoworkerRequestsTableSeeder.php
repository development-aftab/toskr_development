<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CoworkerRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('coworker_requests')->delete();
        
        \DB::table('coworker_requests')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-12-08 18:11:40',
                'updated_at' => '2021-12-08 18:12:40',
                'deleted_at' => NULL,
                'taski_id' => '3',
                'manager_id' => '4',
                'user_id' => '10',
                'status' => '1',
                'task_manager' => '9',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-12-13 20:14:39',
                'updated_at' => '2021-12-13 20:15:10',
                'deleted_at' => NULL,
                'taski_id' => '7',
                'manager_id' => '4',
                'user_id' => '9',
                'status' => '1',
                'task_manager' => '10',
            ),
        ));
        
        
    }
}