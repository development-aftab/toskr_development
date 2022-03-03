<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommonSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('common_settings')->delete();
        
        \DB::table('common_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-10-28 07:19:45',
                'updated_at' => '2021-10-28 07:19:45',
                'deleted_at' => NULL,
                'title' => 'Tosker',
                'favicon' => 'AdminDashboard/default_logo.png',
                'dashboard_logo' => 'AdminDashboard/default_logo.png',
                'dashboard_logo_text' => 'AdminDashboard/default_logo_text.png',
                'footer_text' => '2021 © Tosker form admin.',
            ),
        ));
        
        
    }
}