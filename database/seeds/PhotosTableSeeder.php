<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('photos')->delete();
        
        \DB::table('photos')->insert(array (
            0 => 
            array (
                'id' => 5,
                'title' => 'رحله الى روسيا',
                'photo_path' => 'uploads/photo\\1492011873_IMG_7628.JPG',
                'category_id' => 6,
                'created_at' => '2017-04-12 15:44:33',
                'updated_at' => '2017-04-12 15:44:33',
            ),
            1 => 
            array (
                'id' => 33,
                'title' => 'المدينة المنورة',
                'photo_path' => 'uploads/photo/1492697369_01.jpg',
                'category_id' => 6,
                'created_at' => '2017-04-20 14:09:29',
                'updated_at' => '2017-04-20 14:09:29',
            ),
            2 => 
            array (
                'id' => 36,
                'title' => 'روسيا',
                'photo_path' => 'uploads/photo/1492697438_02.jpg',
                'category_id' => 6,
                'created_at' => '2017-04-20 14:10:38',
                'updated_at' => '2017-04-20 14:10:38',
            ),
            3 => 
            array (
                'id' => 37,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697461_01.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:11:01',
                'updated_at' => '2017-04-20 14:11:01',
            ),
            4 => 
            array (
                'id' => 38,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697476_02.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:11:16',
                'updated_at' => '2017-04-20 14:11:16',
            ),
            5 => 
            array (
                'id' => 39,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697490_03.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:11:30',
                'updated_at' => '2017-04-20 14:11:30',
            ),
            6 => 
            array (
                'id' => 40,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697514_04.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:11:54',
                'updated_at' => '2017-04-20 14:11:54',
            ),
            7 => 
            array (
                'id' => 41,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697543_05.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:12:23',
                'updated_at' => '2017-04-20 14:12:23',
            ),
            8 => 
            array (
                'id' => 42,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697558_07.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:12:38',
                'updated_at' => '2017-04-20 14:12:38',
            ),
            9 => 
            array (
                'id' => 43,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697576_08.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:12:56',
                'updated_at' => '2017-04-20 14:12:56',
            ),
            10 => 
            array (
                'id' => 44,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697591_09.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:13:11',
                'updated_at' => '2017-04-20 14:13:11',
            ),
            11 => 
            array (
                'id' => 45,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697612_10.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:13:32',
                'updated_at' => '2017-04-20 14:13:32',
            ),
            12 => 
            array (
                'id' => 46,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697629_11.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:13:49',
                'updated_at' => '2017-04-20 14:13:49',
            ),
            13 => 
            array (
                'id' => 47,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697657_12.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:14:17',
                'updated_at' => '2017-04-20 14:14:17',
            ),
            14 => 
            array (
                'id' => 48,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697668_14.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:14:28',
                'updated_at' => '2017-04-20 14:14:28',
            ),
            15 => 
            array (
                'id' => 49,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697684_15.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:14:44',
                'updated_at' => '2017-04-20 14:14:44',
            ),
            16 => 
            array (
                'id' => 50,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697698_16.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:14:58',
                'updated_at' => '2017-04-20 14:14:58',
            ),
            17 => 
            array (
                'id' => 51,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697711_17.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:15:11',
                'updated_at' => '2017-04-20 14:15:11',
            ),
            18 => 
            array (
                'id' => 52,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697723_19.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:15:23',
                'updated_at' => '2017-04-20 14:15:23',
            ),
            19 => 
            array (
                'id' => 53,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697736_22.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:15:36',
                'updated_at' => '2017-04-20 14:15:36',
            ),
            20 => 
            array (
                'id' => 54,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697747_23.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:15:47',
                'updated_at' => '2017-04-20 14:15:47',
            ),
            21 => 
            array (
                'id' => 55,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697763_27.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:16:03',
                'updated_at' => '2017-04-20 14:16:03',
            ),
            22 => 
            array (
                'id' => 56,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697777_28.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:16:17',
                'updated_at' => '2017-04-20 14:16:17',
            ),
            23 => 
            array (
                'id' => 57,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697793_32.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:16:33',
                'updated_at' => '2017-04-20 14:16:33',
            ),
            24 => 
            array (
                'id' => 58,
                'title' => '',
                'photo_path' => 'uploads/photo/1492697809_33.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:16:49',
                'updated_at' => '2017-04-20 14:16:49',
            ),
            25 => 
            array (
                'id' => 59,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698056_34.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:20:56',
                'updated_at' => '2017-04-20 14:20:56',
            ),
            26 => 
            array (
                'id' => 60,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698072_35.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:21:12',
                'updated_at' => '2017-04-20 14:21:12',
            ),
            27 => 
            array (
                'id' => 61,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698086_37.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:21:26',
                'updated_at' => '2017-04-20 14:21:26',
            ),
            28 => 
            array (
                'id' => 62,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698100_38.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:21:40',
                'updated_at' => '2017-04-20 14:21:40',
            ),
            29 => 
            array (
                'id' => 63,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698111_39.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:21:51',
                'updated_at' => '2017-04-20 14:21:51',
            ),
            30 => 
            array (
                'id' => 64,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698132_40.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:22:12',
                'updated_at' => '2017-04-20 14:22:12',
            ),
            31 => 
            array (
                'id' => 65,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698144_41.jpg',
                'category_id' => 9,
                'created_at' => '2017-04-20 14:22:24',
                'updated_at' => '2017-04-20 14:22:24',
            ),
            32 => 
            array (
                'id' => 66,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698337_01.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:25:37',
                'updated_at' => '2017-04-20 14:25:37',
            ),
            33 => 
            array (
                'id' => 67,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698349_08.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:25:49',
                'updated_at' => '2017-04-20 14:25:49',
            ),
            34 => 
            array (
                'id' => 68,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698360_09.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:26:00',
                'updated_at' => '2017-04-20 14:26:00',
            ),
            35 => 
            array (
                'id' => 69,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698372_19.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:26:12',
                'updated_at' => '2017-04-20 14:26:12',
            ),
            36 => 
            array (
                'id' => 70,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698385_20.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:26:25',
                'updated_at' => '2017-04-20 14:26:25',
            ),
            37 => 
            array (
                'id' => 71,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698416_22.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:26:56',
                'updated_at' => '2017-04-20 14:26:56',
            ),
            38 => 
            array (
                'id' => 72,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698428_24.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:27:08',
                'updated_at' => '2017-04-20 14:27:08',
            ),
            39 => 
            array (
                'id' => 73,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698478_29.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:27:58',
                'updated_at' => '2017-04-20 14:27:58',
            ),
            40 => 
            array (
                'id' => 74,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698492_31.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:28:12',
                'updated_at' => '2017-04-20 14:28:12',
            ),
            41 => 
            array (
                'id' => 76,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698567_48.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:29:27',
                'updated_at' => '2017-04-20 14:29:27',
            ),
            42 => 
            array (
                'id' => 77,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698580_49.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:29:40',
                'updated_at' => '2017-04-20 14:29:40',
            ),
            43 => 
            array (
                'id' => 78,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698594_53.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:29:54',
                'updated_at' => '2017-04-20 14:29:54',
            ),
            44 => 
            array (
                'id' => 80,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698622_78.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:30:22',
                'updated_at' => '2017-04-20 14:30:22',
            ),
            45 => 
            array (
                'id' => 81,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698670_83.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:31:10',
                'updated_at' => '2017-04-20 14:31:10',
            ),
            46 => 
            array (
                'id' => 82,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698685_86.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:31:25',
                'updated_at' => '2017-04-20 14:31:25',
            ),
            47 => 
            array (
                'id' => 83,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698702_87.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:31:42',
                'updated_at' => '2017-04-20 14:31:42',
            ),
            48 => 
            array (
                'id' => 84,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698717_89.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:31:57',
                'updated_at' => '2017-04-20 14:31:57',
            ),
            49 => 
            array (
                'id' => 85,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698751_95.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:32:31',
                'updated_at' => '2017-04-20 14:32:31',
            ),
            50 => 
            array (
                'id' => 86,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698761_96.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:32:41',
                'updated_at' => '2017-04-20 14:32:41',
            ),
            51 => 
            array (
                'id' => 87,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698774_98.jpg',
                'category_id' => 5,
                'created_at' => '2017-04-20 14:32:54',
                'updated_at' => '2017-04-20 14:32:54',
            ),
            52 => 
            array (
                'id' => 88,
                'title' => '',
                'photo_path' => 'uploads/photo/1492698935_02.jpg',
                'category_id' => 7,
                'created_at' => '2017-04-20 14:35:35',
                'updated_at' => '2017-04-20 14:35:35',
            ),
        ));
        
        
    }
}
