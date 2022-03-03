<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskLogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('task_logs')->delete();
        
        \DB::table('task_logs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-15 10:42:44',
                'updated_at' => '2021-11-15 10:42:44',
                'deleted_at' => NULL,
                'task_id' => '4',
                'activity_name' => 'testing sdadasd',
                'process' => '2',
                'status' => '["1","2"]',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-15 11:11:26',
                'updated_at' => '2021-11-15 11:11:26',
                'deleted_at' => NULL,
                'task_id' => '4',
                'activity_name' => 'testing sdadasd',
                'process' => '2',
                'status' => '["1","2"]',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-15 11:13:27',
                'updated_at' => '2021-11-15 11:13:27',
                'deleted_at' => NULL,
                'task_id' => '4',
                'activity_name' => 'testing sdadasd',
                'process' => '2',
                'status' => '["1","2"]',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-15 11:13:44',
                'updated_at' => '2021-11-15 11:13:44',
                'deleted_at' => NULL,
                'task_id' => '4',
                'activity_name' => 'testing sdadasd',
                'process' => '2',
                'status' => '["1","2"]',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-11-16 07:55:25',
                'updated_at' => '2021-11-16 07:55:25',
                'deleted_at' => NULL,
                'task_id' => '4',
                'activity_name' => 'testing sdadasd',
                'process' => '3',
                'status' => '["1","2"]',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-11-16 07:58:14',
                'updated_at' => '2021-11-16 07:58:14',
                'deleted_at' => NULL,
                'task_id' => '4',
                'activity_name' => 'testing sdadasd',
                'process' => '3',
                'status' => '["1","2"]',
                'note' => 'asdasdasdasdasd dasdasdasds',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-11-18 08:36:26',
                'updated_at' => '2021-11-18 08:36:26',
                'deleted_at' => NULL,
                'task_id' => '6',
                'activity_name' => 'develop dashboard',
                'process' => '1',
                'status' => '["1"]',
                'note' => 'testing',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2021-11-18 08:43:34',
                'updated_at' => '2021-11-18 08:43:34',
                'deleted_at' => NULL,
                'task_id' => '6',
                'activity_name' => 'develop dashboard',
                'process' => '2',
                'status' => '["1"]',
                'note' => 'testing',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2021-12-03 16:20:07',
                'updated_at' => '2021-12-03 16:20:07',
                'deleted_at' => NULL,
                'task_id' => '7',
                'activity_name' => 'Logo design',
                'process' => '1',
                'status' => '["1"]',
                'note' => 'Jaldi banana hai',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2021-12-03 16:20:43',
                'updated_at' => '2021-12-03 16:20:43',
                'deleted_at' => NULL,
                'task_id' => '7',
                'activity_name' => 'Logo design done',
                'process' => '4',
                'status' => '["3"]',
                'note' => 'Ban gaya',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2022-01-09 12:21:18',
                'updated_at' => '2022-01-09 12:21:18',
                'deleted_at' => NULL,
                'task_id' => '3',
                'activity_name' => 'testing',
                'process' => '2',
                'status' => '["1"]',
                'note' => 'testing snakiolkokopkopskjdnasd',
            ),
        ));
        
        
    }
}