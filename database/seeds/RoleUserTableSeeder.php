<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'user_id' => 1,
            ),
            1 => 
            array (
                'role_id' => 2,
                'user_id' => 2,
            ),
            2 => 
            array (
                'role_id' => 3,
                'user_id' => 3,
            ),
            3 => 
            array (
                'role_id' => 3,
                'user_id' => 16,
            ),
            4 => 
            array (
                'role_id' => 3,
                'user_id' => 18,
            ),
            5 => 
            array (
                'role_id' => 3,
                'user_id' => 19,
            ),
            6 => 
            array (
                'role_id' => 3,
                'user_id' => 22,
            ),
            7 => 
            array (
                'role_id' => 3,
                'user_id' => 25,
            ),
            8 => 
            array (
                'role_id' => 4,
                'user_id' => 8,
            ),
            9 => 
            array (
                'role_id' => 4,
                'user_id' => 9,
            ),
            10 => 
            array (
                'role_id' => 4,
                'user_id' => 10,
            ),
            11 => 
            array (
                'role_id' => 4,
                'user_id' => 12,
            ),
            12 => 
            array (
                'role_id' => 4,
                'user_id' => 13,
            ),
            13 => 
            array (
                'role_id' => 4,
                'user_id' => 14,
            ),
            14 => 
            array (
                'role_id' => 4,
                'user_id' => 15,
            ),
            15 => 
            array (
                'role_id' => 4,
                'user_id' => 17,
            ),
            16 => 
            array (
                'role_id' => 4,
                'user_id' => 21,
            ),
            17 => 
            array (
                'role_id' => 4,
                'user_id' => 24,
            ),
            18 => 
            array (
                'role_id' => 5,
                'user_id' => 4,
            ),
            19 => 
            array (
                'role_id' => 5,
                'user_id' => 5,
            ),
            20 => 
            array (
                'role_id' => 5,
                'user_id' => 6,
            ),
            21 => 
            array (
                'role_id' => 5,
                'user_id' => 7,
            ),
            22 => 
            array (
                'role_id' => 5,
                'user_id' => 11,
            ),
            23 => 
            array (
                'role_id' => 5,
                'user_id' => 20,
            ),
            24 => 
            array (
                'role_id' => 5,
                'user_id' => 23,
            ),
        ));
        
        
    }
}