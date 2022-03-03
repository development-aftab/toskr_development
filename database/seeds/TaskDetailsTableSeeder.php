<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskDetailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('task_details')->delete();
        
        \DB::table('task_details')->insert(array (
            0 => 
            array (
                'id' => 5,
                'created_at' => '2021-11-09 07:29:34',
                'updated_at' => '2021-11-16 07:55:25',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => NULL,
                'manager_id' => 4,
                'activity_name' => 'testing sdadasd',
                'process' => '3',
                'status' => '["1","2"]',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            1 => 
            array (
                'id' => 6,
                'created_at' => '2021-11-09 11:37:47',
                'updated_at' => '2021-11-09 11:37:47',
                'deleted_at' => NULL,
                'task_id' => '5',
                'employee_id' => NULL,
                'manager_id' => 4,
                'activity_name' => 'develop dashboard',
                'process' => '1',
                'status' => '["1"]',
                'note' => 'jaldi kam karo please',
            ),
            2 => 
            array (
                'id' => 7,
                'created_at' => '2021-11-10 13:02:23',
                'updated_at' => '2021-11-10 13:02:33',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => NULL,
                'manager_id' => 9,
                'activity_name' => 'testing sdadasd',
                'process' => '2',
                'status' => 'null',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            3 => 
            array (
                'id' => 8,
                'created_at' => '2021-11-15 09:12:24',
                'updated_at' => '2022-01-09 12:21:18',
                'deleted_at' => NULL,
                'task_id' => '3',
                'employee_id' => NULL,
                'manager_id' => 4,
                'activity_name' => 'testing',
                'process' => '2',
                'status' => '["1"]',
                'note' => 'testing snakiolkokopkopskjdnasd',
            ),
            4 => 
            array (
                'id' => 9,
                'created_at' => '2021-11-18 08:36:26',
                'updated_at' => '2021-11-18 08:43:34',
                'deleted_at' => NULL,
                'task_id' => '6',
                'employee_id' => NULL,
                'manager_id' => 20,
                'activity_name' => 'develop dashboard',
                'process' => '2',
                'status' => '["1"]',
                'note' => 'testing',
            ),
            5 => 
            array (
                'id' => 10,
                'created_at' => '2021-12-03 16:20:07',
                'updated_at' => '2021-12-03 16:20:43',
                'deleted_at' => NULL,
                'task_id' => '7',
                'employee_id' => NULL,
                'manager_id' => 4,
                'activity_name' => 'Logo design done',
                'process' => '4',
                'status' => '["3"]',
                'note' => 'Ban gaya',
            ),
        ));
        
        
    }
}