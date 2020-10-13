<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'وما أبرئ نفسي',
            'message' => 'وما أبرئ نفسي إن النفس لأمارة بالسوء إلا ما رحم ربي إن ربي غفور رحيم(53) سورة يوسف',
                'created_at' => '2017-04-24 12:21:15',
                'updated_at' => '2017-04-24 12:28:37',
            ),
        ));
        
        
    }
}
