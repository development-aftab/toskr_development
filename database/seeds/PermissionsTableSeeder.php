<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'All Permission',
                'label' => NULL,
                'created_at' => '2021-10-28 07:19:45',
                'updated_at' => '2021-10-28 07:19:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'add-company',
                'label' => NULL,
                'created_at' => '2021-10-28 08:26:01',
                'updated_at' => '2021-10-28 08:26:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'edit-company',
                'label' => NULL,
                'created_at' => '2021-10-28 08:26:01',
                'updated_at' => '2021-10-28 08:26:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'view-company',
                'label' => NULL,
                'created_at' => '2021-10-28 08:26:01',
                'updated_at' => '2021-10-28 08:26:01',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'delete-company',
                'label' => NULL,
                'created_at' => '2021-10-28 08:26:01',
                'updated_at' => '2021-10-28 08:26:01',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'add-department',
                'label' => NULL,
                'created_at' => '2021-10-29 05:54:02',
                'updated_at' => '2021-10-29 05:54:02',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'edit-department',
                'label' => NULL,
                'created_at' => '2021-10-29 05:54:02',
                'updated_at' => '2021-10-29 05:54:02',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'view-department',
                'label' => NULL,
                'created_at' => '2021-10-29 05:54:02',
                'updated_at' => '2021-10-29 05:54:02',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'delete-department',
                'label' => NULL,
                'created_at' => '2021-10-29 05:54:02',
                'updated_at' => '2021-10-29 05:54:02',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'add-employee',
                'label' => NULL,
                'created_at' => '2021-10-29 05:58:24',
                'updated_at' => '2021-10-29 05:58:24',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'edit-employee',
                'label' => NULL,
                'created_at' => '2021-10-29 05:58:24',
                'updated_at' => '2021-10-29 05:58:24',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'view-employee',
                'label' => NULL,
                'created_at' => '2021-10-29 05:58:24',
                'updated_at' => '2021-10-29 05:58:24',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'delete-employee',
                'label' => NULL,
                'created_at' => '2021-10-29 05:58:24',
                'updated_at' => '2021-10-29 05:58:24',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'add-invitation',
                'label' => NULL,
                'created_at' => '2021-10-29 09:55:10',
                'updated_at' => '2021-10-29 09:55:10',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'edit-invitation',
                'label' => NULL,
                'created_at' => '2021-10-29 09:55:10',
                'updated_at' => '2021-10-29 09:55:10',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'view-invitation',
                'label' => NULL,
                'created_at' => '2021-10-29 09:55:10',
                'updated_at' => '2021-10-29 09:55:10',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'delete-invitation',
                'label' => NULL,
                'created_at' => '2021-10-29 09:55:10',
                'updated_at' => '2021-10-29 09:55:10',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'add-task',
                'label' => NULL,
                'created_at' => '2021-11-01 08:32:40',
                'updated_at' => '2021-11-01 08:32:40',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'edit-task',
                'label' => NULL,
                'created_at' => '2021-11-01 08:32:40',
                'updated_at' => '2021-11-01 08:32:40',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'view-task',
                'label' => NULL,
                'created_at' => '2021-11-01 08:32:40',
                'updated_at' => '2021-11-01 08:32:40',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'delete-task',
                'label' => NULL,
                'created_at' => '2021-11-01 08:32:40',
                'updated_at' => '2021-11-01 08:32:40',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'add-taskcategory',
                'label' => NULL,
                'created_at' => '2021-11-01 09:21:46',
                'updated_at' => '2021-11-01 09:21:46',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'edit-taskcategory',
                'label' => NULL,
                'created_at' => '2021-11-01 09:21:46',
                'updated_at' => '2021-11-01 09:21:46',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'view-taskcategory',
                'label' => NULL,
                'created_at' => '2021-11-01 09:21:46',
                'updated_at' => '2021-11-01 09:21:46',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'delete-taskcategory',
                'label' => NULL,
                'created_at' => '2021-11-01 09:21:46',
                'updated_at' => '2021-11-01 09:21:46',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'add-taskassigned',
                'label' => NULL,
                'created_at' => '2021-11-01 13:36:00',
                'updated_at' => '2021-11-01 13:36:00',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'edit-taskassigned',
                'label' => NULL,
                'created_at' => '2021-11-01 13:36:00',
                'updated_at' => '2021-11-01 13:36:00',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'view-taskassigned',
                'label' => NULL,
                'created_at' => '2021-11-01 13:36:00',
                'updated_at' => '2021-11-01 13:36:00',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'delete-taskassigned',
                'label' => NULL,
                'created_at' => '2021-11-01 13:36:00',
                'updated_at' => '2021-11-01 13:36:00',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'add-taskdetail',
                'label' => NULL,
                'created_at' => '2021-11-02 05:14:17',
                'updated_at' => '2021-11-02 05:14:17',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'edit-taskdetail',
                'label' => NULL,
                'created_at' => '2021-11-02 05:14:17',
                'updated_at' => '2021-11-02 05:14:17',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'view-taskdetail',
                'label' => NULL,
                'created_at' => '2021-11-02 05:14:17',
                'updated_at' => '2021-11-02 05:14:17',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'delete-taskdetail',
                'label' => NULL,
                'created_at' => '2021-11-02 05:14:17',
                'updated_at' => '2021-11-02 05:14:17',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'add-attachment',
                'label' => NULL,
                'created_at' => '2021-11-02 05:20:26',
                'updated_at' => '2021-11-02 05:20:26',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'edit-attachment',
                'label' => NULL,
                'created_at' => '2021-11-02 05:20:26',
                'updated_at' => '2021-11-02 05:20:26',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'view-attachment',
                'label' => NULL,
                'created_at' => '2021-11-02 05:20:26',
                'updated_at' => '2021-11-02 05:20:26',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'delete-attachment',
                'label' => NULL,
                'created_at' => '2021-11-02 05:20:26',
                'updated_at' => '2021-11-02 05:20:26',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'add-message',
                'label' => NULL,
                'created_at' => '2021-11-02 05:26:21',
                'updated_at' => '2021-11-02 05:26:21',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'edit-message',
                'label' => NULL,
                'created_at' => '2021-11-02 05:26:21',
                'updated_at' => '2021-11-02 05:26:21',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'view-message',
                'label' => NULL,
                'created_at' => '2021-11-02 05:26:21',
                'updated_at' => '2021-11-02 05:26:21',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'delete-message',
                'label' => NULL,
                'created_at' => '2021-11-02 05:26:21',
                'updated_at' => '2021-11-02 05:26:21',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'add-progre',
                'label' => NULL,
                'created_at' => '2021-11-02 06:07:35',
                'updated_at' => '2021-11-02 06:07:35',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'edit-progre',
                'label' => NULL,
                'created_at' => '2021-11-02 06:07:35',
                'updated_at' => '2021-11-02 06:07:35',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'view-progre',
                'label' => NULL,
                'created_at' => '2021-11-02 06:07:35',
                'updated_at' => '2021-11-02 06:07:35',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'delete-progre',
                'label' => NULL,
                'created_at' => '2021-11-02 06:07:35',
                'updated_at' => '2021-11-02 06:07:35',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'add-userinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:36',
                'updated_at' => '2021-11-02 07:16:36',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'edit-userinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:36',
                'updated_at' => '2021-11-02 07:16:36',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'view-userinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:36',
                'updated_at' => '2021-11-02 07:16:36',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'delete-userinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:36',
                'updated_at' => '2021-11-02 07:16:36',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'add-taskinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:56',
                'updated_at' => '2021-11-02 07:16:56',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'edit-taskinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:56',
                'updated_at' => '2021-11-02 07:16:56',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'view-taskinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:56',
                'updated_at' => '2021-11-02 07:16:56',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'delete-taskinsight',
                'label' => NULL,
                'created_at' => '2021-11-02 07:16:56',
                'updated_at' => '2021-11-02 07:16:56',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'add-groupchat',
                'label' => NULL,
                'created_at' => '2021-11-02 10:57:29',
                'updated_at' => '2021-11-02 10:57:29',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'edit-groupchat',
                'label' => NULL,
                'created_at' => '2021-11-02 10:57:29',
                'updated_at' => '2021-11-02 10:57:29',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'view-groupchat',
                'label' => NULL,
                'created_at' => '2021-11-02 10:57:29',
                'updated_at' => '2021-11-02 10:57:29',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'delete-groupchat',
                'label' => NULL,
                'created_at' => '2021-11-02 10:57:29',
                'updated_at' => '2021-11-02 10:57:29',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'add-messageviewed',
                'label' => NULL,
                'created_at' => '2021-11-10 09:13:38',
                'updated_at' => '2021-11-10 09:13:38',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'edit-messageviewed',
                'label' => NULL,
                'created_at' => '2021-11-10 09:13:38',
                'updated_at' => '2021-11-10 09:13:38',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'view-messageviewed',
                'label' => NULL,
                'created_at' => '2021-11-10 09:13:38',
                'updated_at' => '2021-11-10 09:13:38',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'delete-messageviewed',
                'label' => NULL,
                'created_at' => '2021-11-10 09:13:38',
                'updated_at' => '2021-11-10 09:13:38',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'add-homepage',
                'label' => NULL,
                'created_at' => '2021-11-15 05:25:37',
                'updated_at' => '2021-11-15 05:25:37',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'edit-homepage',
                'label' => NULL,
                'created_at' => '2021-11-15 05:25:37',
                'updated_at' => '2021-11-15 05:25:37',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'view-homepage',
                'label' => NULL,
                'created_at' => '2021-11-15 05:25:37',
                'updated_at' => '2021-11-15 05:25:37',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'delete-homepage',
                'label' => NULL,
                'created_at' => '2021-11-15 05:25:37',
                'updated_at' => '2021-11-15 05:25:37',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'add-feature',
                'label' => NULL,
                'created_at' => '2021-11-15 05:26:32',
                'updated_at' => '2021-11-15 05:26:32',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'edit-feature',
                'label' => NULL,
                'created_at' => '2021-11-15 05:26:32',
                'updated_at' => '2021-11-15 05:26:32',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'view-feature',
                'label' => NULL,
                'created_at' => '2021-11-15 05:26:32',
                'updated_at' => '2021-11-15 05:26:32',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'delete-feature',
                'label' => NULL,
                'created_at' => '2021-11-15 05:26:32',
                'updated_at' => '2021-11-15 05:26:32',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'add-howitworks',
                'label' => NULL,
                'created_at' => '2021-11-15 05:29:03',
                'updated_at' => '2021-11-15 05:29:03',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'edit-howitworks',
                'label' => NULL,
                'created_at' => '2021-11-15 05:29:03',
                'updated_at' => '2021-11-15 05:29:03',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'view-howitworks',
                'label' => NULL,
                'created_at' => '2021-11-15 05:29:03',
                'updated_at' => '2021-11-15 05:29:03',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'delete-howitworks',
                'label' => NULL,
                'created_at' => '2021-11-15 05:29:03',
                'updated_at' => '2021-11-15 05:29:03',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'add-faq',
                'label' => NULL,
                'created_at' => '2021-11-15 05:31:59',
                'updated_at' => '2021-11-15 05:31:59',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'edit-faq',
                'label' => NULL,
                'created_at' => '2021-11-15 05:31:59',
                'updated_at' => '2021-11-15 05:31:59',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'view-faq',
                'label' => NULL,
                'created_at' => '2021-11-15 05:31:59',
                'updated_at' => '2021-11-15 05:31:59',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'delete-faq',
                'label' => NULL,
                'created_at' => '2021-11-15 05:31:59',
                'updated_at' => '2021-11-15 05:31:59',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'add-contact',
                'label' => NULL,
                'created_at' => '2021-11-15 05:34:05',
                'updated_at' => '2021-11-15 05:34:05',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'edit-contact',
                'label' => NULL,
                'created_at' => '2021-11-15 05:34:05',
                'updated_at' => '2021-11-15 05:34:05',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'view-contact',
                'label' => NULL,
                'created_at' => '2021-11-15 05:34:05',
                'updated_at' => '2021-11-15 05:34:05',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'delete-contact',
                'label' => NULL,
                'created_at' => '2021-11-15 05:34:05',
                'updated_at' => '2021-11-15 05:34:05',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'add-tasklog',
                'label' => NULL,
                'created_at' => '2021-11-15 10:34:16',
                'updated_at' => '2021-11-15 10:34:16',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'edit-tasklog',
                'label' => NULL,
                'created_at' => '2021-11-15 10:34:16',
                'updated_at' => '2021-11-15 10:34:16',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'view-tasklog',
                'label' => NULL,
                'created_at' => '2021-11-15 10:34:16',
                'updated_at' => '2021-11-15 10:34:16',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'delete-tasklog',
                'label' => NULL,
                'created_at' => '2021-11-15 10:34:16',
                'updated_at' => '2021-11-15 10:34:16',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'add-socialmedia',
                'label' => NULL,
                'created_at' => '2021-11-15 12:49:39',
                'updated_at' => '2021-11-15 12:49:39',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'edit-socialmedia',
                'label' => NULL,
                'created_at' => '2021-11-15 12:49:39',
                'updated_at' => '2021-11-15 12:49:39',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'view-socialmedia',
                'label' => NULL,
                'created_at' => '2021-11-15 12:49:39',
                'updated_at' => '2021-11-15 12:49:39',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'delete-socialmedia',
                'label' => NULL,
                'created_at' => '2021-11-15 12:49:39',
                'updated_at' => '2021-11-15 12:49:39',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'add-information',
                'label' => NULL,
                'created_at' => '2021-11-16 04:53:22',
                'updated_at' => '2021-11-16 04:53:22',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'edit-information',
                'label' => NULL,
                'created_at' => '2021-11-16 04:53:22',
                'updated_at' => '2021-11-16 04:53:22',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'view-information',
                'label' => NULL,
                'created_at' => '2021-11-16 04:53:22',
                'updated_at' => '2021-11-16 04:53:22',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'delete-information',
                'label' => NULL,
                'created_at' => '2021-11-16 04:53:22',
                'updated_at' => '2021-11-16 04:53:22',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'add-coworkerrequest',
                'label' => NULL,
                'created_at' => '2021-12-07 21:13:16',
                'updated_at' => '2021-12-07 21:13:16',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'edit-coworkerrequest',
                'label' => NULL,
                'created_at' => '2021-12-07 21:13:16',
                'updated_at' => '2021-12-07 21:13:16',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'view-coworkerrequest',
                'label' => NULL,
                'created_at' => '2021-12-07 21:13:16',
                'updated_at' => '2021-12-07 21:13:16',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'delete-coworkerrequest',
                'label' => NULL,
                'created_at' => '2021-12-07 21:13:16',
                'updated_at' => '2021-12-07 21:13:16',
            ),
        ));
        
        
    }
}