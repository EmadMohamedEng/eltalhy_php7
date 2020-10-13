<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'id' => 7,
                'title' => 'الفاتحة بصوت الداعية الإسلامى السيد أحمد الطلحى',
                'youtube_link' => 'https://www.youtube.com/embed/T5O5IMGHIvE?rel=0&amp;controls=0&amp;showinfo=0',
                'description' => 'الفاتحة بصوت الداعية الإسلامى السيد أحمد الطلحى',
                'category_id' => 7,
                'created_at' => '2017-04-20 10:44:03',
                'updated_at' => '2017-04-20 14:05:45',
                'slug' => 'lfth-bsot-ldaay-lslm-lsyd-ahmd-ltlh',
            ),
        ));
        
        
    }
}
