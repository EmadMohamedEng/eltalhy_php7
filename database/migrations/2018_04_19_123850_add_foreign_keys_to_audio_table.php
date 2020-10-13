<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('audio', function(Blueprint $table)
		{
			$table->foreign('album_id')->references('id')->on('album')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('category_id')->references('id')->on('categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('audio', function(Blueprint $table)
		{
			$table->dropForeign('audio_album_id_foreign');
			$table->dropForeign('audio_category_id_foreign');
		});
	}

}
