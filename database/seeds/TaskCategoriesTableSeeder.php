<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('task_categories')->delete();
        
        \DB::table('task_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-01 11:21:26',
                'updated_at' => '2021-11-01 11:21:26',
                'deleted_at' => NULL,
                'name' => 'UI/UX Design',
                'company_id' => '3',
                'satatus' => '0',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-18 06:32:24',
                'updated_at' => '2021-11-18 06:32:24',
                'deleted_at' => NULL,
                'name' => 'error reporting',
                'company_id' => '19',
                'satatus' => '0',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-18 06:32:44',
                'updated_at' => '2021-11-18 06:32:44',
                'deleted_at' => NULL,
                'name' => 'Traits',
                'company_id' => '19',
                'satatus' => '0',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-18 06:33:38',
                'updated_at' => '2021-11-18 06:33:38',
                'deleted_at' => NULL,
                'name' => 'accountancy',
                'company_id' => '19',
                'satatus' => '0',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => '2021-12-03 16:33:29',
                'updated_at' => '2021-12-03 16:33:29',
                'deleted_at' => NULL,
                'name' => 'Ui Ux',
                'company_id' => '22',
                'satatus' => '0',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => '2021-12-03 16:33:53',
                'updated_at' => '2021-12-03 16:33:53',
                'deleted_at' => NULL,
                'name' => 'bohot sare',
                'company_id' => '22',
                'satatus' => '0',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => '2021-12-24 14:08:55',
                'updated_at' => '2021-12-24 14:08:55',
                'deleted_at' => NULL,
                'name' => 'Contracting Work',
                'company_id' => '3',
                'satatus' => '0',
            ),
        ));
        
        
    }
}