<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAudioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('audio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')->unique('title');
			$table->string('sound_link');
			$table->text('description');
			$table->timestamps();
			$table->integer('category_id')->unsigned()->nullable()->index('audio_category_id_foreign');
			$table->string('slug');
			$table->integer('album_id')->unsigned()->nullable()->index('audio_album_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('audio');
	}

}
