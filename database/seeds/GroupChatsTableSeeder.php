<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GroupChatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('group_chats')->delete();
        
        \DB::table('group_chats')->insert(array (
            0 => 
            array (
                'id' => 8,
                'created_at' => '2021-11-09 06:00:47',
                'updated_at' => '2021-11-17 12:01:20',
                'deleted_at' => '2021-11-17 12:01:20',
                'name' => 'texting',
                'admin_id' => 4,
                'members' => '["9","10"]',
                'group_id' => '10990228',
                'image' => 'groupimage/P2rHQjCccEirgt7nYVuPTQpgA9zRxU7qaKTv8VOR.png',
            ),
            1 => 
            array (
                'id' => 9,
                'created_at' => '2021-11-09 06:41:51',
                'updated_at' => '2021-11-17 12:39:31',
                'deleted_at' => NULL,
                'name' => 'testing',
                'admin_id' => 4,
                'members' => '["9"]',
                'group_id' => '10990229',
                'image' => 'groupimage/ULnbUv82KlZFcaIeaJmiiSUysVOj4VoIwne7UDK2.jpeg',
            ),
            2 => 
            array (
                'id' => 10,
                'created_at' => '2021-11-10 05:23:18',
                'updated_at' => '2021-11-17 13:03:09',
                'deleted_at' => NULL,
                'name' => 'company meeting',
                'admin_id' => 2,
                'members' => '["9","10"]',
                'group_id' => '109902210',
                'image' => 'groupimage/YwsNegCjsUinbkCd0m33wjQ39aFsUIFM0pCYXXpE.jpeg',
            ),
            3 => 
            array (
                'id' => 11,
                'created_at' => '2021-11-11 11:57:08',
                'updated_at' => '2021-11-17 12:39:59',
                'deleted_at' => '2021-11-17 12:39:59',
                'name' => 'testing',
                'admin_id' => 4,
                'members' => '["9","10"]',
                'group_id' => '109902211',
                'image' => 'groupimage/7MPGHFVjJwbR7TdNhEPw7tUpeqXYCEC02yXH6T22.png',
            ),
            4 => 
            array (
                'id' => 12,
                'created_at' => '2021-11-15 09:07:29',
                'updated_at' => '2021-11-15 09:07:29',
                'deleted_at' => NULL,
                'name' => 'meeting',
                'admin_id' => 4,
                'members' => '["9","10"]',
                'group_id' => '109902212',
                'image' => 'groupimage/oAhsj3bTsEqD4a6PZzhFsHNnbF4L1dyBHd4XTLpX.png',
            ),
            5 => 
            array (
                'id' => 13,
                'created_at' => '2021-11-18 09:50:01',
                'updated_at' => '2021-11-18 09:50:01',
                'deleted_at' => NULL,
                'name' => 'texting',
                'admin_id' => 6,
                'members' => '["21"]',
                'group_id' => '109902213',
                'image' => 'groupimage/R0ADIguUuKMi7awGJyKDGDOdL90rgy58pJg4kEnE.png',
            ),
            6 => 
            array (
                'id' => 14,
                'created_at' => '2021-11-18 09:50:15',
                'updated_at' => '2021-11-18 09:50:15',
                'deleted_at' => NULL,
                'name' => 'meeting',
                'admin_id' => 6,
                'members' => '["21"]',
                'group_id' => '109902214',
                'image' => 'groupimage/xixBqsikS2incRUdIxU0vxWdqcJThpLJ4HY7LLnn.png',
            ),
            7 => 
            array (
                'id' => 15,
                'created_at' => '2021-11-18 09:51:00',
                'updated_at' => '2021-11-18 09:51:00',
                'deleted_at' => NULL,
                'name' => 'meeting to night',
                'admin_id' => 6,
                'members' => '["21"]',
                'group_id' => '109902215',
                'image' => 'groupimage/qGsP6CNMkku2N2Cv4yEvJUlPSmlSSE5rpXXpLVke.png',
            ),
            8 => 
            array (
                'id' => 16,
                'created_at' => '2021-11-30 00:39:50',
                'updated_at' => '2021-11-30 00:40:03',
                'deleted_at' => NULL,
                'name' => 'group12',
                'admin_id' => 4,
                'members' => '["9","10"]',
                'group_id' => '109902216',
                'image' => 'groupimage/ALygYznFHNcRP4CGlcPTITi2JjmQVe8lWLjLZ751.jpeg',
            ),
            9 => 
            array (
                'id' => 17,
                'created_at' => '2021-12-16 21:56:33',
                'updated_at' => '2021-12-16 21:56:33',
                'deleted_at' => NULL,
                'name' => 'meeting',
                'admin_id' => 3,
                'members' => '["10","4",9]',
                'group_id' => '109902217',
                'image' => 'groupimage/1MKX4gRe0mCMXtj9nOCUJQ5kOPUxIaMcm5yyEZDt.jpeg',
            ),
            10 => 
            array (
                'id' => 18,
                'created_at' => '2021-12-16 21:57:18',
                'updated_at' => '2021-12-16 21:57:18',
                'deleted_at' => NULL,
                'name' => 'testing',
                'admin_id' => 3,
                'members' => '["10",9]',
                'group_id' => '109902218',
                'image' => 'groupimage/6a8aM3CcT95E42Azznjck18gjWaTjdecbyui5ws3.png',
            ),
            11 => 
            array (
                'id' => 19,
                'created_at' => '2021-12-16 21:57:47',
                'updated_at' => '2021-12-16 21:57:47',
                'deleted_at' => NULL,
                'name' => 'hello',
                'admin_id' => 3,
                'members' => '["10",9]',
                'group_id' => '109902219',
                'image' => 'groupimage/kdKgiT5ZmpPtNoAXmeAp5rWCoZWTproYzFdDXlhl.jpeg',
            ),
        ));
        
        
    }
}