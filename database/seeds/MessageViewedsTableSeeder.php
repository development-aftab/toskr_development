<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessageViewedsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('message_vieweds')->delete();
        
        \DB::table('message_vieweds')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-10 09:52:28',
                'updated_at' => '2021-11-30 00:39:15',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '3',
                'receiver' => '4',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            1 => 
            array (
                'id' => 10,
                'created_at' => '2021-11-10 11:23:47',
                'updated_at' => '2021-11-11 11:53:23',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            2 => 
            array (
                'id' => 12,
                'created_at' => '2021-11-10 11:32:49',
                'updated_at' => '2021-11-30 00:40:21',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '3',
                'receiver' => '4',
                'is_group' => 1,
                'group_id' => '10990229',
                'viewed' => '1',
            ),
            3 => 
            array (
                'id' => 20,
                'created_at' => '2021-11-10 12:50:44',
                'updated_at' => '2021-11-11 11:53:23',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            4 => 
            array (
                'id' => 21,
                'created_at' => '2021-11-10 12:50:54',
                'updated_at' => '2021-11-11 11:53:23',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            5 => 
            array (
                'id' => 22,
                'created_at' => '2021-11-10 12:51:07',
                'updated_at' => '2021-11-11 11:53:23',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            6 => 
            array (
                'id' => 23,
                'created_at' => '2021-11-10 12:51:22',
                'updated_at' => '2021-11-30 00:40:25',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '9',
                'receiver' => '4',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            7 => 
            array (
                'id' => 24,
                'created_at' => '2021-11-10 12:51:35',
                'updated_at' => '2021-11-11 11:53:23',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            8 => 
            array (
                'id' => 25,
                'created_at' => '2021-11-10 12:52:01',
                'updated_at' => '2021-11-11 11:53:23',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            9 => 
            array (
                'id' => 26,
                'created_at' => '2021-11-10 12:52:19',
                'updated_at' => '2021-11-30 00:40:25',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '9',
                'receiver' => '4',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            10 => 
            array (
                'id' => 27,
                'created_at' => '2021-11-10 12:52:33',
                'updated_at' => '2021-11-30 00:40:25',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '9',
                'receiver' => '4',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            11 => 
            array (
                'id' => 28,
                'created_at' => '2021-11-10 12:52:43',
                'updated_at' => '2021-11-11 11:53:23',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            12 => 
            array (
                'id' => 29,
                'created_at' => '2021-11-10 12:57:03',
                'updated_at' => '2021-11-11 11:53:32',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 1,
                'group_id' => '10990228',
                'viewed' => '1',
            ),
            13 => 
            array (
                'id' => 30,
                'created_at' => '2021-11-10 12:57:03',
                'updated_at' => '2021-11-10 12:57:03',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '10',
                'is_group' => 1,
                'group_id' => '10990228',
                'viewed' => '0',
            ),
            14 => 
            array (
                'id' => 31,
                'created_at' => '2021-11-10 12:57:03',
                'updated_at' => '2021-11-17 12:01:21',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '3',
                'is_group' => 1,
                'group_id' => '10990228',
                'viewed' => '1',
            ),
            15 => 
            array (
                'id' => 32,
                'created_at' => '2021-11-16 07:59:04',
                'updated_at' => '2021-11-16 07:59:04',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            16 => 
            array (
                'id' => 33,
                'created_at' => '2021-11-16 07:59:04',
                'updated_at' => '2021-11-16 07:59:04',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '10',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            17 => 
            array (
                'id' => 34,
                'created_at' => '2021-11-16 07:59:04',
                'updated_at' => '2021-11-19 05:57:57',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '3',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '1',
            ),
            18 => 
            array (
                'id' => 35,
                'created_at' => '2021-11-16 08:00:02',
                'updated_at' => '2021-11-16 08:00:02',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            19 => 
            array (
                'id' => 36,
                'created_at' => '2021-11-16 08:00:02',
                'updated_at' => '2021-11-16 08:00:02',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '10',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            20 => 
            array (
                'id' => 37,
                'created_at' => '2021-11-16 08:00:02',
                'updated_at' => '2021-11-19 05:57:57',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '3',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '1',
            ),
            21 => 
            array (
                'id' => 38,
                'created_at' => '2021-11-17 11:40:37',
                'updated_at' => '2021-11-17 11:40:37',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '3',
                'receiver' => '9',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            22 => 
            array (
                'id' => 39,
                'created_at' => '2021-11-17 11:40:37',
                'updated_at' => '2021-11-17 11:40:37',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '3',
                'receiver' => '10',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            23 => 
            array (
                'id' => 40,
                'created_at' => '2021-11-17 11:40:37',
                'updated_at' => '2021-11-30 00:40:20',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '3',
                'receiver' => '4',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '1',
            ),
            24 => 
            array (
                'id' => 41,
                'created_at' => '2021-11-18 05:55:41',
                'updated_at' => '2021-11-18 05:55:41',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            25 => 
            array (
                'id' => 42,
                'created_at' => '2021-11-18 05:55:41',
                'updated_at' => '2021-11-18 05:55:41',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '10',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '0',
            ),
            26 => 
            array (
                'id' => 43,
                'created_at' => '2021-11-18 05:55:41',
                'updated_at' => '2021-11-19 05:57:57',
                'deleted_at' => NULL,
                'task_id' => '4',
                'send_to' => '4',
                'receiver' => '3',
                'is_group' => 1,
                'group_id' => '109902212',
                'viewed' => '1',
            ),
            27 => 
            array (
                'id' => 44,
                'created_at' => '2021-11-18 09:10:51',
                'updated_at' => '2021-11-18 09:10:51',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '21',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '0',
            ),
            28 => 
            array (
                'id' => 45,
                'created_at' => '2021-11-18 10:57:13',
                'updated_at' => '2021-11-18 10:57:13',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '21',
                'is_group' => 1,
                'group_id' => '109902213',
                'viewed' => '0',
            ),
            29 => 
            array (
                'id' => 46,
                'created_at' => '2021-11-18 10:57:13',
                'updated_at' => '2021-11-18 12:51:33',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '19',
                'is_group' => 1,
                'group_id' => '109902213',
                'viewed' => '1',
            ),
            30 => 
            array (
                'id' => 47,
                'created_at' => '2021-11-18 10:57:34',
                'updated_at' => '2021-11-18 10:57:34',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '21',
                'is_group' => 1,
                'group_id' => '109902213',
                'viewed' => '0',
            ),
            31 => 
            array (
                'id' => 48,
                'created_at' => '2021-11-18 10:57:34',
                'updated_at' => '2021-11-18 12:51:33',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '19',
                'is_group' => 1,
                'group_id' => '109902213',
                'viewed' => '1',
            ),
            32 => 
            array (
                'id' => 49,
                'created_at' => '2021-11-18 11:22:38',
                'updated_at' => '2021-11-18 11:22:38',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '21',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '0',
            ),
            33 => 
            array (
                'id' => 50,
                'created_at' => '2021-11-18 11:22:44',
                'updated_at' => '2021-11-18 11:22:44',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '21',
                'is_group' => 1,
                'group_id' => '109902215',
                'viewed' => '0',
            ),
            34 => 
            array (
                'id' => 51,
                'created_at' => '2021-11-18 11:22:44',
                'updated_at' => '2021-11-18 12:51:35',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '19',
                'is_group' => 1,
                'group_id' => '109902215',
                'viewed' => '1',
            ),
            35 => 
            array (
                'id' => 52,
                'created_at' => '2021-11-18 12:41:49',
                'updated_at' => '2021-11-18 12:51:32',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '19',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            36 => 
            array (
                'id' => 53,
                'created_at' => '2021-11-18 12:42:06',
                'updated_at' => '2021-11-18 12:42:06',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '21',
                'is_group' => 1,
                'group_id' => '109902213',
                'viewed' => '0',
            ),
            37 => 
            array (
                'id' => 54,
                'created_at' => '2021-11-18 12:42:06',
                'updated_at' => '2021-11-18 12:51:33',
                'deleted_at' => NULL,
                'task_id' => '6',
                'send_to' => '20',
                'receiver' => '19',
                'is_group' => 1,
                'group_id' => '109902213',
                'viewed' => '1',
            ),
            38 => 
            array (
                'id' => 55,
                'created_at' => '2021-12-03 16:23:02',
                'updated_at' => '2021-12-03 16:28:29',
                'deleted_at' => NULL,
                'task_id' => '7',
                'send_to' => '4',
                'receiver' => '10',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            39 => 
            array (
                'id' => 56,
                'created_at' => '2021-12-03 16:23:03',
                'updated_at' => '2021-12-03 16:28:29',
                'deleted_at' => NULL,
                'task_id' => '7',
                'send_to' => '4',
                'receiver' => '10',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '1',
            ),
            40 => 
            array (
                'id' => 57,
                'created_at' => '2022-01-31 19:55:53',
                'updated_at' => '2022-01-31 19:55:53',
                'deleted_at' => NULL,
                'task_id' => '2',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '0',
            ),
            41 => 
            array (
                'id' => 58,
                'created_at' => '2022-01-31 19:55:54',
                'updated_at' => '2022-01-31 19:55:54',
                'deleted_at' => NULL,
                'task_id' => '2',
                'send_to' => '4',
                'receiver' => '9',
                'is_group' => 0,
                'group_id' => NULL,
                'viewed' => '0',
            ),
        ));
        
        
    }
}