<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sections')->delete();
        
        \DB::table('sections')->insert(array (
            0 => 
            array (
                'id' => 74,
                'title' => 'الطهارة وأقسامها',
                'page_number' => '1',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:58:46',
            ),
            1 => 
            array (
                'id' => 75,
                'title' => 'فرائض الوضوء',
                'page_number' => '2',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:58:46',
            ),
            2 => 
            array (
                'id' => 76,
                'title' => 'نواقض الوضوء',
                'page_number' => '3',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:58:46',
            ),
            3 => 
            array (
                'id' => 77,
                'title' => 'فرائض الغسل وسننة',
                'page_number' => '4',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:58:46',
            ),
            4 => 
            array (
                'id' => 78,
                'title' => ' التيمم وموجباته',
                'page_number' => '5',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:58:46',
            ),
            5 => 
            array (
                'id' => 79,
                'title' => 'الصلاة وشروطها',
                'page_number' => '6',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:58:46',
            ),
        ));
        
        
    }
}
