<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SocialMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('social_media')->delete();
        
        \DB::table('social_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => '2021-11-15 13:06:55',
                'updated_at' => '2021-11-16 02:04:13',
                'deleted_at' => NULL,
                'nam' => 'facebook',
                'link' => 'https://www.facebook.com',
                'image' => 'socialmedia/MKM2peVWz0jGsYJwqarVT4CuQOlUDHrq09k2fso4.png',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => '2021-11-15 13:15:37',
                'updated_at' => '2021-11-15 13:15:37',
                'deleted_at' => NULL,
                'nam' => 'instagram',
                'link' => 'https://www.instagram.com/',
                'image' => 'socialmedia/65DyqYOf0qbpSeHNpGoiOKAgln96RP1wm2VVHazz.png',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => '2021-11-15 13:16:06',
                'updated_at' => '2021-11-15 13:16:06',
                'deleted_at' => NULL,
                'nam' => 'twitter',
                'link' => 'https://www.twitter.com/',
                'image' => 'socialmedia/RDPNmn6ZLPvQlQKLSWIiVaRfJrKwqdA1YKZzCYMB.png',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => '2021-11-15 13:16:28',
                'updated_at' => '2021-11-15 13:16:28',
                'deleted_at' => NULL,
                'nam' => 'youtube',
                'link' => 'https://www.youtube.com/',
                'image' => 'socialmedia/1Ps0h4AmFSsdrwwFR2xErYSQOfiCez0H7ISS0wva.png',
            ),
        ));
        
        
    }
}