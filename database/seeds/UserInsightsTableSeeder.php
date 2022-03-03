<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserInsightsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_insights')->delete();
        
        
        
    }
}