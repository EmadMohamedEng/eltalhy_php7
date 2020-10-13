<?php

use Illuminate\Database\Seeder;

class ScaffoldinterfacesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scaffoldinterfaces')->delete();
        
        \DB::table('scaffoldinterfaces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_090738_categories.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Category.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/CategoryController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/category',
                'tablename' => 'categories',
                'created_at' => '2017-04-10 09:07:38',
                'updated_at' => '2017-04-10 09:07:38',
            ),
            1 => 
            array (
                'id' => 2,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_090837_photos.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Photo.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/PhotoController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/photo',
                'tablename' => 'photos',
                'created_at' => '2017-04-10 09:08:37',
                'updated_at' => '2017-04-10 09:08:37',
            ),
            2 => 
            array (
                'id' => 3,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_090956_videos.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Video.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/VideoController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/video',
                'tablename' => 'videos',
                'created_at' => '2017-04-10 09:09:56',
                'updated_at' => '2017-04-10 09:09:56',
            ),
            3 => 
            array (
                'id' => 4,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_091041_newsletters.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Newsletter.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/NewsletterController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/newsletter',
                'tablename' => 'newsletters',
                'created_at' => '2017-04-10 09:10:41',
                'updated_at' => '2017-04-10 09:10:41',
            ),
            4 => 
            array (
                'id' => 5,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_091200_contacts.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Contact.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/ContactController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/contact',
                'tablename' => 'contacts',
                'created_at' => '2017-04-10 09:12:00',
                'updated_at' => '2017-04-10 09:12:00',
            ),
            5 => 
            array (
                'id' => 6,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_091238_settings.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Setting.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/SettingController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/setting',
                'tablename' => 'settings',
                'created_at' => '2017-04-10 09:12:38',
                'updated_at' => '2017-04-10 09:12:38',
            ),
            6 => 
            array (
                'id' => 7,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092235_audio.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Audio.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/AudioController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/audio',
                'tablename' => 'audio',
                'created_at' => '2017-04-10 09:22:36',
                'updated_at' => '2017-04-10 09:22:36',
            ),
            7 => 
            array (
                'id' => 8,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092523_sliders.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Slider.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/SliderController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/slider',
                'tablename' => 'sliders',
                'created_at' => '2017-04-10 09:25:24',
                'updated_at' => '2017-04-10 09:25:24',
            ),
            8 => 
            array (
                'id' => 9,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092652_books.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Book.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/BookController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/book',
                'tablename' => 'books',
                'created_at' => '2017-04-10 09:26:53',
                'updated_at' => '2017-04-10 09:26:53',
            ),
            9 => 
            array (
                'id' => 10,
                'package' => 'Laravel',
                'migration' => 'C:\\xampp\\htdocs\\blog11\\database/migrations/2017_04_10_092810_sections.php',
                'model' => 'C:\\xampp\\htdocs\\blog11\\app/Section.php',
                'controller' => 'C:\\xampp\\htdocs\\blog11\\app/Http/Controllers/SectionController.php',
                'views' => 'C:\\xampp\\htdocs\\blog11\\resources/views/section',
                'tablename' => 'sections',
                'created_at' => '2017-04-10 09:28:10',
                'updated_at' => '2017-04-10 09:28:10',
            ),
        ));
        
        
    }
}
