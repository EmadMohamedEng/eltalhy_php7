<?php

use Illuminate\Database\Migrations\Migration;

class InsertMentorsIntoMentors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('mentors')->insert(
            [
                [
                    'name' => 'العلامة الحبيب عبد القادر بن أحمد بن عبد الرحمن السقاف',
                    'image' => 'uploads/mentor/t1.jpg',
                ],
                [
                  'name' => 'العلامة الحبيب عمر بن محمد بن سالم بن حفيظ بن الشيخ أبوبكر بن سالم',
                  'image' => 'uploads/mentor/t2.jpg',
                ],
                [
                  'name' => 'العلامة الدكتور على جمعة مفتي الديار المصرية',
                  'image' => 'uploads/mentor/t6.jpg',
                ],
                [
                  'name' => 'الشيخ المربي : السيّد محجوب أبوفارس الصفراني',
                  'image' => 'uploads/mentor/t3.jpg',
                ],
                [
                  'name' => 'العلامة السيد الشيخ محمود افندي المجددي الخالدي النقشبندي',
                  'image' => 'uploads/mentor/t4.jpg',
                ],
                [
                  'name' => 'العلامة الشيخ ابراهيم آل خليفة الاحسائي',
                  'image' => 'uploads/mentor/t7.jpg',
                ],
                [
                  'name' => 'الحبيب أبوبكر بن علي العدني المشهور',
                  'image' => 'uploads/mentor/t8.jpg',
                ],
                [
                  'name' => 'الحبيب علي زين العابدين بن عبد الرحمن الجفري',
                  'image' => 'uploads/mentor/t5.jpg',
                ],
                [
                  'name' => 'الحبيب محمد بن عبد الرحمن السقاف',
                  'image' => 'uploads/mentor/t9.jpg',
                ],

            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
