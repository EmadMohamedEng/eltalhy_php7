<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'محاضرات',
                'created_at' => '2017-04-12 15:20:41',
                'updated_at' => '2017-04-12 15:20:41',
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'رحلات',
                'created_at' => '2017-04-12 15:20:52',
                'updated_at' => '2017-04-12 15:20:52',
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'مقابلات',
                'created_at' => '2017-04-12 15:21:24',
                'updated_at' => '2017-04-12 15:21:24',
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'برامج',
                'created_at' => '2017-04-12 15:21:33',
                'updated_at' => '2017-04-12 15:21:33',
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'كواليس',
                'created_at' => '2017-04-12 15:21:45',
                'updated_at' => '2017-04-12 15:21:45',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'زيارات',
                'created_at' => '2017-04-12 15:21:54',
                'updated_at' => '2017-04-12 15:21:54',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'لقاءات',
                'created_at' => '2017-04-12 15:21:59',
                'updated_at' => '2017-04-12 15:21:59',
            ),
        ));
        
        
    }
}
