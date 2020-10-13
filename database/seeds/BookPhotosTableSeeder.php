<?php

use Illuminate\Database\Seeder;

class BookPhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('book_photos')->delete();
        
        \DB::table('book_photos')->insert(array (
            0 => 
            array (
                'id' => 642,
                'page_number' => NULL,
                'photo_path' => 'uploads/book/1492880326_book_1.jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 73,
            ),
            1 => 
            array (
                'id' => 643,
                'page_number' => NULL,
                'photo_path' => 'uploads/book/1492880326_book-covers.jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-24 11:56:04',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 644,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(1).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-30 15:11:39',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 645,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(2).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-30 15:11:39',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 646,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(3).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-24 11:57:06',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 647,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(4).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-24 11:57:06',
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 648,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(5).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-24 11:57:06',
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 649,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(6).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 650,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(7).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 9,
            ),
            9 => 
            array (
                'id' => 651,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(8).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 10,
            ),
            10 => 
            array (
                'id' => 652,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(9).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 11,
            ),
            11 => 
            array (
                'id' => 653,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(10).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 12,
            ),
            12 => 
            array (
                'id' => 654,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(11).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 13,
            ),
            13 => 
            array (
                'id' => 655,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(12).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 14,
            ),
            14 => 
            array (
                'id' => 656,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(13).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 15,
            ),
            15 => 
            array (
                'id' => 657,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(14).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 16,
            ),
            16 => 
            array (
                'id' => 658,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(15).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 17,
            ),
            17 => 
            array (
                'id' => 659,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(16).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 18,
            ),
            18 => 
            array (
                'id' => 660,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(17).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 19,
            ),
            19 => 
            array (
                'id' => 661,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(18).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 20,
            ),
            20 => 
            array (
                'id' => 662,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(19).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 21,
            ),
            21 => 
            array (
                'id' => 663,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(20).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 22,
            ),
            22 => 
            array (
                'id' => 664,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(21).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 23,
            ),
            23 => 
            array (
                'id' => 665,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(22).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 24,
            ),
            24 => 
            array (
                'id' => 666,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(23).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 25,
            ),
            25 => 
            array (
                'id' => 667,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(24).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 26,
            ),
            26 => 
            array (
                'id' => 668,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(25).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 27,
            ),
            27 => 
            array (
                'id' => 669,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(26).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 28,
            ),
            28 => 
            array (
                'id' => 670,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(27).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 29,
            ),
            29 => 
            array (
                'id' => 671,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(28).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 30,
            ),
            30 => 
            array (
                'id' => 672,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(29).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 31,
            ),
            31 => 
            array (
                'id' => 673,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(30).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 32,
            ),
            32 => 
            array (
                'id' => 674,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(31).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 33,
            ),
            33 => 
            array (
                'id' => 675,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(32).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 34,
            ),
            34 => 
            array (
                'id' => 676,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(33).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 35,
            ),
            35 => 
            array (
                'id' => 677,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(34).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 36,
            ),
            36 => 
            array (
                'id' => 678,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(35).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 37,
            ),
            37 => 
            array (
                'id' => 679,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(36).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 38,
            ),
            38 => 
            array (
                'id' => 680,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(37).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 39,
            ),
            39 => 
            array (
                'id' => 681,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(38).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 40,
            ),
            40 => 
            array (
                'id' => 682,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(39).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 41,
            ),
            41 => 
            array (
                'id' => 683,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(40).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 42,
            ),
            42 => 
            array (
                'id' => 684,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(41).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 43,
            ),
            43 => 
            array (
                'id' => 685,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(42).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 44,
            ),
            44 => 
            array (
                'id' => 686,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(43).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 45,
            ),
            45 => 
            array (
                'id' => 687,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(44).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 46,
            ),
            46 => 
            array (
                'id' => 688,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(45).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 47,
            ),
            47 => 
            array (
                'id' => 689,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(46).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 48,
            ),
            48 => 
            array (
                'id' => 690,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(47).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 49,
            ),
            49 => 
            array (
                'id' => 691,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(48).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 50,
            ),
            50 => 
            array (
                'id' => 692,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(49).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 51,
            ),
            51 => 
            array (
                'id' => 693,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(50).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 52,
            ),
            52 => 
            array (
                'id' => 694,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(51).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 53,
            ),
            53 => 
            array (
                'id' => 695,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(52).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 54,
            ),
            54 => 
            array (
                'id' => 696,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(53).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 55,
            ),
            55 => 
            array (
                'id' => 697,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(54).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 56,
            ),
            56 => 
            array (
                'id' => 698,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(55).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 57,
            ),
            57 => 
            array (
                'id' => 699,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(56).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 58,
            ),
            58 => 
            array (
                'id' => 700,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(57).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 59,
            ),
            59 => 
            array (
                'id' => 701,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(58).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 60,
            ),
            60 => 
            array (
                'id' => 702,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(59).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 61,
            ),
            61 => 
            array (
                'id' => 703,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(60).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 62,
            ),
            62 => 
            array (
                'id' => 704,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(61).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 63,
            ),
            63 => 
            array (
                'id' => 705,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(62).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 64,
            ),
            64 => 
            array (
                'id' => 706,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(63).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 65,
            ),
            65 => 
            array (
                'id' => 707,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(64).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 66,
            ),
            66 => 
            array (
                'id' => 708,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(65).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 67,
            ),
            67 => 
            array (
                'id' => 709,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(66).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 68,
            ),
            68 => 
            array (
                'id' => 710,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(67).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 69,
            ),
            69 => 
            array (
                'id' => 711,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(68).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 70,
            ),
            70 => 
            array (
                'id' => 712,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(69).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 71,
            ),
            71 => 
            array (
                'id' => 713,
                'page_number' => NULL,
            'photo_path' => 'uploads/book/1492880326_page_(70).jpg',
                'book_id' => 27,
                'created_at' => '2017-04-22 16:58:46',
                'updated_at' => '2017-04-22 16:59:31',
                'order' => 72,
            ),
        ));
        
        
    }
}
