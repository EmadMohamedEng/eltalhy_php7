<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 3,
                'key' => 'facebook_link',
                'value' => 'http://www.facebook.com/ElTalhyOfficial',
                'created_at' => '2017-04-16 17:56:22',
                'updated_at' => '2017-04-22 09:58:22',
            ),
            1 => 
            array (
                'id' => 4,
                'key' => 'youtube_link',
                'value' => 'http://www.youtube.com/channel/UC28v97ukG58n0QgHdfSu-Hg',
                'created_at' => '2017-04-16 17:56:43',
                'updated_at' => '2017-04-20 08:50:03',
            ),
            2 => 
            array (
                'id' => 5,
                'key' => 'instagram_link',
                'value' => 'http://www.instagram.com/ElTalhyOfficial',
                'created_at' => '2017-04-16 17:57:00',
                'updated_at' => '2017-04-20 08:50:07',
            ),
            3 => 
            array (
                'id' => 6,
                'key' => 'twitter_link',
                'value' => 'http://www.twitter.com/ElTalhyOfficial',
                'created_at' => '2017-04-16 17:57:45',
                'updated_at' => '2017-04-20 08:50:13',
            ),
            4 => 
            array (
                'id' => 7,
                'key' => 'telegram_link',
                'value' => '#',
                'created_at' => '2017-04-16 17:58:09',
                'updated_at' => '2017-04-16 17:58:09',
            ),
            5 => 
            array (
                'id' => 8,
                'key' => 'soundcloud_link',
                'value' => 'http://www.soundcloud.com/ElTalhyOfficial',
                'created_at' => '2017-04-16 17:58:24',
                'updated_at' => '2017-04-20 08:50:18',
            ),
        ));
        
        
    }
}
