<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskAssignedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('task_assigneds')->delete();
        
        \DB::table('task_assigneds')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-01 13:48:21',
                'updated_at' => '2021-11-08 07:27:45',
                'deleted_at' => '2021-11-08 07:27:45',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-01 13:48:21',
                'updated_at' => '2021-11-08 07:27:45',
                'deleted_at' => '2021-11-08 07:27:45',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-02 09:05:36',
                'updated_at' => '2021-11-08 09:57:07',
                'deleted_at' => '2021-11-08 09:57:07',
                'task_id' => '3',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-08 07:27:45',
                'updated_at' => '2021-11-08 07:30:51',
                'deleted_at' => '2021-11-08 07:30:51',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-11-08 07:27:45',
                'updated_at' => '2021-11-08 07:30:51',
                'deleted_at' => '2021-11-08 07:30:51',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-11-08 07:30:51',
                'updated_at' => '2021-11-08 07:31:01',
                'deleted_at' => '2021-11-08 07:31:01',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-11-08 07:30:51',
                'updated_at' => '2021-11-08 07:31:01',
                'deleted_at' => '2021-11-08 07:31:01',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2021-11-08 07:31:01',
                'updated_at' => '2021-11-08 07:31:29',
                'deleted_at' => '2021-11-08 07:31:29',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2021-11-08 07:31:01',
                'updated_at' => '2021-11-08 07:31:29',
                'deleted_at' => '2021-11-08 07:31:29',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2021-11-08 07:31:29',
                'updated_at' => '2021-11-08 07:39:34',
                'deleted_at' => '2021-11-08 07:39:34',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2021-11-08 07:31:29',
                'updated_at' => '2021-11-08 07:39:34',
                'deleted_at' => '2021-11-08 07:39:34',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => '2021-11-08 07:39:34',
                'updated_at' => '2021-11-08 07:48:16',
                'deleted_at' => '2021-11-08 07:48:16',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => '2021-11-08 07:39:34',
                'updated_at' => '2021-11-08 07:48:16',
                'deleted_at' => '2021-11-08 07:48:16',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => '2021-11-08 07:48:16',
                'updated_at' => '2021-11-08 08:00:01',
                'deleted_at' => '2021-11-08 08:00:01',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => '2021-11-08 07:48:16',
                'updated_at' => '2021-11-08 08:00:01',
                'deleted_at' => '2021-11-08 08:00:01',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => '2021-11-08 08:00:01',
                'updated_at' => '2021-11-17 13:00:31',
                'deleted_at' => '2021-11-17 13:00:31',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => '2021-11-08 08:00:01',
                'updated_at' => '2021-11-17 13:00:31',
                'deleted_at' => '2021-11-17 13:00:31',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => '2021-11-08 08:42:10',
                'updated_at' => '2021-11-09 06:47:35',
                'deleted_at' => '2021-11-09 06:47:35',
                'task_id' => '4',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => '2021-11-08 08:42:10',
                'updated_at' => '2021-11-09 06:47:35',
                'deleted_at' => '2021-11-09 06:47:35',
                'task_id' => '4',
                'employee_id' => '10',
                'task_manager' => '0',
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => '2021-11-08 08:43:44',
                'updated_at' => '2021-11-08 09:04:34',
                'deleted_at' => '2021-11-08 09:04:34',
                'task_id' => '5',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => '2021-11-08 08:43:44',
                'updated_at' => '2021-11-08 09:04:34',
                'deleted_at' => '2021-11-08 09:04:34',
                'task_id' => '5',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => '2021-11-08 09:04:34',
                'updated_at' => '2021-11-08 09:04:34',
                'deleted_at' => NULL,
                'task_id' => '5',
                'employee_id' => '9',
                'task_manager' => '0',
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => '2021-11-08 09:04:34',
                'updated_at' => '2021-11-08 09:04:34',
                'deleted_at' => NULL,
                'task_id' => '5',
                'employee_id' => '10',
                'task_manager' => '1',
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => '2021-11-08 09:57:07',
                'updated_at' => '2021-11-08 09:57:07',
                'deleted_at' => NULL,
                'task_id' => '3',
                'employee_id' => '9',
                'task_manager' => '1',
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => '2021-11-09 06:47:35',
                'updated_at' => '2021-11-16 07:55:16',
                'deleted_at' => '2021-11-16 07:55:16',
                'task_id' => '4',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => '2021-11-09 06:47:35',
                'updated_at' => '2021-11-16 07:55:16',
                'deleted_at' => '2021-11-16 07:55:16',
                'task_id' => '4',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => '2021-11-16 07:55:16',
                'updated_at' => '2021-11-16 07:55:16',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '9',
                'task_manager' => '0',
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => '2021-11-16 07:55:16',
                'updated_at' => '2021-11-16 07:55:16',
                'deleted_at' => NULL,
                'task_id' => '4',
                'employee_id' => '10',
                'task_manager' => '1',
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => '2021-11-17 13:00:31',
                'updated_at' => '2021-12-03 16:56:54',
                'deleted_at' => '2021-12-03 16:56:54',
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '',
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => '2021-11-17 13:00:31',
                'updated_at' => '2021-12-03 16:56:54',
                'deleted_at' => '2021-12-03 16:56:54',
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => '2021-11-18 08:33:35',
                'updated_at' => '2021-11-18 08:35:05',
                'deleted_at' => '2021-11-18 08:35:05',
                'task_id' => '6',
                'employee_id' => '21',
                'task_manager' => '',
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => '2021-11-18 08:35:05',
                'updated_at' => '2021-11-18 12:23:54',
                'deleted_at' => '2021-11-18 12:23:54',
                'task_id' => '6',
                'employee_id' => '21',
                'task_manager' => '',
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => '2021-11-18 12:23:54',
                'updated_at' => '2021-11-18 12:24:08',
                'deleted_at' => '2021-11-18 12:24:08',
                'task_id' => '6',
                'employee_id' => '21',
                'task_manager' => '',
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => '2021-11-18 12:24:08',
                'updated_at' => '2021-11-18 12:36:22',
                'deleted_at' => '2021-11-18 12:36:22',
                'task_id' => '6',
                'employee_id' => '21',
                'task_manager' => '',
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => '2021-11-18 12:36:22',
                'updated_at' => '2021-11-18 12:36:22',
                'deleted_at' => NULL,
                'task_id' => '6',
                'employee_id' => '21',
                'task_manager' => '1',
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => '2021-12-03 16:19:09',
                'updated_at' => '2021-12-03 16:25:45',
                'deleted_at' => '2021-12-03 16:25:45',
                'task_id' => '7',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => '2021-12-03 16:25:45',
                'updated_at' => '2021-12-03 16:51:04',
                'deleted_at' => '2021-12-03 16:51:04',
                'task_id' => '7',
                'employee_id' => '10',
                'task_manager' => '',
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => '2021-12-03 16:51:04',
                'updated_at' => '2021-12-03 16:51:04',
                'deleted_at' => NULL,
                'task_id' => '7',
                'employee_id' => '10',
                'task_manager' => '1',
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => '2021-12-03 16:56:54',
                'updated_at' => '2021-12-03 16:56:54',
                'deleted_at' => NULL,
                'task_id' => '2',
                'employee_id' => '9',
                'task_manager' => '0',
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => '2021-12-03 16:56:54',
                'updated_at' => '2021-12-03 16:56:54',
                'deleted_at' => NULL,
                'task_id' => '2',
                'employee_id' => '10',
                'task_manager' => '1',
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => '2021-12-08 18:12:40',
                'updated_at' => '2021-12-08 18:12:40',
                'deleted_at' => NULL,
                'task_id' => '3',
                'employee_id' => '10',
                'task_manager' => '0',
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => '2021-12-13 20:15:10',
                'updated_at' => '2021-12-13 20:15:10',
                'deleted_at' => NULL,
                'task_id' => '7',
                'employee_id' => '9',
                'task_manager' => '0',
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => '2022-01-17 17:10:48',
                'updated_at' => '2022-01-17 17:10:48',
                'deleted_at' => NULL,
                'task_id' => '8',
                'employee_id' => '17',
                'task_manager' => '1',
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => '2022-01-17 20:04:36',
                'updated_at' => '2022-01-17 20:04:36',
                'deleted_at' => NULL,
                'task_id' => '9',
                'employee_id' => '12',
                'task_manager' => '1',
            ),
        ));
        
        
    }
}