<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'label' => NULL,
                'created_at' => '2021-10-28 07:19:45',
                'updated_at' => '2021-10-28 07:19:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'label' => NULL,
                'created_at' => '2021-10-28 07:19:45',
                'updated_at' => '2021-10-28 07:19:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'company',
                'label' => NULL,
                'created_at' => '2021-10-28 07:28:20',
                'updated_at' => '2021-10-28 07:28:20',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'employee',
                'label' => NULL,
                'created_at' => '2021-10-28 07:28:40',
                'updated_at' => '2021-10-28 07:28:40',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Manager',
                'label' => NULL,
                'created_at' => '2021-10-29 08:33:53',
                'updated_at' => '2021-10-29 08:33:53',
            ),
        ));
        
        
    }
}