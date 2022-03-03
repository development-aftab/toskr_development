<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departments')->delete();
        
        \DB::table('departments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-10-29 07:09:19',
                'updated_at' => '2021-10-29 07:09:19',
                'deleted_at' => NULL,
                'name' => 'Production',
                'company_id' => '3',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-10-29 07:09:33',
                'updated_at' => '2021-10-29 07:09:33',
                'deleted_at' => NULL,
                'name' => 'Research and Development',
                'company_id' => '3',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-10-29 07:09:43',
                'updated_at' => '2021-10-29 07:09:43',
                'deleted_at' => NULL,
                'name' => 'Purchasing',
                'company_id' => '3',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-10-29 07:09:54',
                'updated_at' => '2021-10-29 07:09:54',
                'deleted_at' => NULL,
                'name' => 'Marketing',
                'company_id' => '3',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-10-29 07:10:10',
                'updated_at' => '2021-10-29 07:10:10',
                'deleted_at' => NULL,
                'name' => 'Human Resource Management.',
                'company_id' => '3',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-10-29 07:10:22',
                'updated_at' => '2021-10-29 07:10:22',
                'deleted_at' => NULL,
                'name' => 'Accounting',
                'company_id' => '3',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-10-29 11:58:58',
                'updated_at' => '2021-10-29 11:58:58',
                'deleted_at' => NULL,
                'name' => 'JZ Department',
                'company_id' => '3',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => '2021-11-18 06:14:10',
                'updated_at' => '2021-11-18 06:14:10',
                'deleted_at' => NULL,
                'name' => 'Accounting',
                'company_id' => '19',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => '2021-12-03 16:32:57',
                'updated_at' => '2021-12-03 16:32:57',
                'deleted_at' => NULL,
                'name' => 'Sales',
                'company_id' => '22',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => '2021-12-24 14:08:18',
                'updated_at' => '2021-12-24 14:08:18',
                'deleted_at' => NULL,
                'name' => 'Demo Department',
                'company_id' => '3',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => '2022-01-17 20:28:45',
                'updated_at' => '2022-01-17 20:28:45',
                'deleted_at' => NULL,
                'name' => 'Samosa',
                'company_id' => '3',
            ),
        ));
        
        
    }
}