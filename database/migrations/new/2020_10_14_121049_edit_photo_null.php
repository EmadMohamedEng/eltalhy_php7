<?php

use Illuminate\Database\Migrations\Migration;

class EditPhotoNull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \DB::statement("ALTER TABLE `photos` CHANGE `title` `title` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;");
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
