<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditAboutsIntoAbouts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      \DB::statement("UPDATE `abouts` SET `description` = '<p>هو السيّد:&nbsp; أحمد ابن فوزي بن خليفة الطلحي يرجع نسبه للإمام الحسن المثنى بن الإمام الحسن السبط بن أمير المؤمنين علي بن أبي طالب والسيّدة فاطمة الزهراء &psi; بنت سيّدنا محمّد خاتم النبيين</p>\r\n' WHERE `abouts`.`id` = 4");

      \DB::statement("UPDATE `abouts` SET `description` = '<p>ولد من والديــن شريفين من ذرية الإمام الحســن بن علي بن أبي طالب&nbsp; ، قبيل فجر يوم الإثنين العاشر من شوال عام 1405هـ&nbsp; /&nbsp; 29 يونيـــو 1985م، بالجبل الأخضر بمدينة البيضاء إحدى مدن شرق ليبيا، بجوار ضريح الصحابي الجليل سيّدنا رويفع بن ثابت الأنصاري</p>\r\n' WHERE `abouts`.`id` = 5
      ");

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
