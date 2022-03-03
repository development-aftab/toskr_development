<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InvitationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('invitations')->delete();
        
        \DB::table('invitations')->insert(array (
            0 => 
            array (
                'id' => 3,
                'created_at' => '2021-10-29 11:38:56',
                'updated_at' => '2021-11-01 07:23:35',
                'deleted_at' => '2021-11-01 07:23:35',
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '5',
                'email' => 'ali@yopmail.com',
                'url' => 'register_employee/92597740',
                'status' => '0',
                'unique_code' => '92597740',
            ),
            1 => 
            array (
                'id' => 4,
                'created_at' => '2021-10-29 11:39:52',
                'updated_at' => '2021-11-01 07:26:34',
                'deleted_at' => '2021-11-01 07:26:34',
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'ks@yopmail.com',
                'url' => 'register_employee/85748702',
                'status' => '0',
                'unique_code' => '85748702',
            ),
            2 => 
            array (
                'id' => 5,
                'created_at' => '2021-10-29 11:42:47',
                'updated_at' => '2021-11-01 07:29:11',
                'deleted_at' => '2021-11-01 07:29:11',
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'js@yopmail.com',
                'url' => 'register_employee/25950615',
                'status' => '0',
                'unique_code' => '25950615',
            ),
            3 => 
            array (
                'id' => 6,
                'created_at' => '2021-10-29 11:46:10',
                'updated_at' => '2021-11-01 07:33:13',
                'deleted_at' => '2021-11-01 07:33:13',
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'asif@yopmail.com',
                'url' => 'register_employee/57368104',
                'status' => '0',
                'unique_code' => '57368104',
            ),
            4 => 
            array (
                'id' => 7,
                'created_at' => '2021-10-29 11:46:58',
                'updated_at' => '2021-11-01 07:34:54',
                'deleted_at' => '2021-11-01 07:34:54',
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'walid@yopmail.com',
                'url' => 'register_employee/14021953',
                'status' => '0',
                'unique_code' => '14021953',
            ),
            5 => 
            array (
                'id' => 8,
                'created_at' => '2021-10-29 11:48:13',
                'updated_at' => '2021-11-15 05:12:27',
                'deleted_at' => '2021-11-15 05:12:27',
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'zk@yopmail.com',
                'url' => 'register_employee/28595638',
                'status' => '0',
                'unique_code' => '28595638',
            ),
            6 => 
            array (
                'id' => 9,
                'created_at' => '2021-10-29 11:50:17',
                'updated_at' => '2021-10-29 11:50:17',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'jz@yopmail.com',
                'url' => 'register_employee/45892161',
                'status' => '0',
                'unique_code' => '45892161',
            ),
            7 => 
            array (
                'id' => 10,
                'created_at' => '2021-10-29 11:51:00',
                'updated_at' => '2021-10-29 11:51:00',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'jojo@yopmail.com',
                'url' => 'register_employee/50268997',
                'status' => '0',
                'unique_code' => '50268997',
            ),
            8 => 
            array (
                'id' => 11,
                'created_at' => '2021-10-29 11:52:34',
                'updated_at' => '2021-10-29 11:52:34',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'hi@yopmail.com',
                'url' => 'register_employee/20306134',
                'status' => '0',
                'unique_code' => '20306134',
            ),
            9 => 
            array (
                'id' => 12,
                'created_at' => '2021-10-29 11:53:41',
                'updated_at' => '2021-10-29 11:53:41',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'aat@tafsol.com',
                'url' => 'register_employee/12638547',
                'status' => '0',
                'unique_code' => '12638547',
            ),
            10 => 
            array (
                'id' => 13,
                'created_at' => '2021-10-29 11:55:03',
                'updated_at' => '2021-10-29 11:55:03',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '4',
                'role_id' => '4',
                'email' => 'zat@tafsol.com',
                'url' => 'register_employee/22893189',
                'status' => '0',
                'unique_code' => '22893189',
            ),
            11 => 
            array (
                'id' => 14,
                'created_at' => '2021-11-01 05:37:01',
                'updated_at' => '2021-11-01 05:37:01',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '4',
                'email' => 'waqas@yopmail.com',
                'url' => 'register_employee/85590380',
                'status' => '0',
                'unique_code' => '85590380',
            ),
            12 => 
            array (
                'id' => 15,
                'created_at' => '2021-11-01 05:39:30',
                'updated_at' => '2021-11-01 05:39:30',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '4',
                'email' => 'aftab@yopmail.com',
                'url' => 'register_employee/42104298',
                'status' => '0',
                'unique_code' => '42104298',
            ),
            13 => 
            array (
                'id' => 16,
                'created_at' => '2021-11-01 05:43:33',
                'updated_at' => '2021-11-01 05:43:33',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '4',
                'email' => 'zuhi@yahoo.com',
                'url' => 'register_employee/63623598',
                'status' => '0',
                'unique_code' => '63623598',
            ),
            14 => 
            array (
                'id' => 18,
                'created_at' => '2021-11-12 12:38:45',
                'updated_at' => '2021-11-12 12:38:45',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '4',
                'email' => 'john@student.com',
                'url' => 'register_employee/13569630',
                'status' => '0',
                'unique_code' => '13569630',
            ),
            15 => 
            array (
                'id' => 19,
                'created_at' => '2021-11-12 12:40:30',
                'updated_at' => '2021-11-12 12:40:30',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '4',
                'email' => 'john@student.com',
                'url' => 'register_employee/15841241',
                'status' => '0',
                'unique_code' => '15841241',
            ),
            16 => 
            array (
                'id' => 20,
                'created_at' => '2021-11-29 18:11:48',
                'updated_at' => '2021-11-29 18:11:48',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '5',
                'email' => 'james123@yopmail.com',
                'url' => 'register_employee/33056629',
                'status' => '0',
                'unique_code' => '33056629',
            ),
            17 => 
            array (
                'id' => 21,
                'created_at' => '2021-11-29 18:14:34',
                'updated_at' => '2021-11-29 18:14:34',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '5',
                'email' => 'james123@yopmail.com',
                'url' => 'register_employee/77801202',
                'status' => '0',
                'unique_code' => '77801202',
            ),
            18 => 
            array (
                'id' => 22,
                'created_at' => '2021-11-29 18:16:20',
                'updated_at' => '2021-11-29 18:16:20',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '5',
                'email' => 'james123@yopmail.com',
                'url' => 'register_employee/78798682',
                'status' => '0',
                'unique_code' => '78798682',
            ),
            19 => 
            array (
                'id' => 23,
                'created_at' => '2021-11-29 18:16:54',
                'updated_at' => '2021-11-29 18:16:54',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '5',
                'email' => 'imdad123@yopmail.com',
                'url' => 'register_employee/29971926',
                'status' => '0',
                'unique_code' => '29971926',
            ),
            20 => 
            array (
                'id' => 24,
                'created_at' => '2021-11-29 18:17:40',
                'updated_at' => '2021-11-29 18:17:40',
                'deleted_at' => NULL,
                'company_id' => '3',
                'department_id' => '1',
                'role_id' => '5',
                'email' => 'james@yopmail.com',
                'url' => 'register_employee/96529813',
                'status' => '0',
                'unique_code' => '96529813',
            ),
            21 => 
            array (
                'id' => 25,
                'created_at' => '2021-12-03 16:35:02',
                'updated_at' => '2021-12-03 16:35:02',
                'deleted_at' => NULL,
                'company_id' => '22',
                'department_id' => '9',
                'role_id' => '5',
                'email' => 'mct@tafsol.com',
                'url' => 'register_employee/95651628',
                'status' => '0',
                'unique_code' => '95651628',
            ),
        ));
        
        
    }
}