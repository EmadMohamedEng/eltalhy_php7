<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('books')->delete();
        
        \DB::table('books')->insert(array (
            0 => 
            array (
                'id' => 27,
                'title' => 'أساس علوم الدين',
                'description' => '<p>أساس علوم الدين</p>
',
                'photo_path' => 'uploads/book/1492880326_book.pdf',
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:36',
                'start_cover' => 643,
                'end_cover' => 642,
                'sequence' => '',
            ),
        ));
        
        
    }
}
