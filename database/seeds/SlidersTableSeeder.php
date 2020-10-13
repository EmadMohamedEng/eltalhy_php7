<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 5,
                'title' => 'الموقع الرسمي',
                'description' => 'هو السيّد:  أحمد ابن فوزي بن خليفة الطلحي يرجع نسبه للإمام الحسن المثنى بن الإمام الحسن السبط بن أمير المؤمنين علي بن أبي طالب والسيّدة فاطمة الزهراء ψ بنت سيّدنا محمّد خاتم النبيين ',
                'link' => 'http://www.eltalhyofficial.com/aboutus',
                'photo_path' => 'uploads/slider\\1492464284_slide_3.png',
                'created_at' => '2017-04-17 21:24:44',
                'updated_at' => '2017-04-22 10:24:01',
            ),
            1 => 
            array (
                'id' => 6,
                'title' => 'مقابلات',
                'description' => 'شاهد مقابلات السيد أحمد الطلحي وبرامجة التلفزيونية.',
                'link' => '#',
                'photo_path' => 'uploads/slider\\1492464472_profile2.png',
                'created_at' => '2017-04-17 21:27:52',
                'updated_at' => '2017-04-17 21:27:52',
            ),
            2 => 
            array (
                'id' => 7,
                'title' => 'سفير النوايا الحسنة',
                'description' => 'يقول عنه أتباعه ومُحِبُّوه إنه نموذج للشاب الذي نشأ في طاعة الله ومرضاة نبيه، وطالب العلم الذي لا تحول المسافات والعوائق بينه وبين بُغْيَتِه.',
                'link' => '#',
                'photo_path' => 'uploads/slider\\1492464558_slide_3.png',
                'created_at' => '2017-04-17 21:29:18',
                'updated_at' => '2017-04-17 21:29:18',
            ),
        ));
        
        
    }
}
