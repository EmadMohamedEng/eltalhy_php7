<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_photos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('page_number')->nullable();
			$table->string('photo_path');
			$table->integer('book_id')->unsigned()->nullable()->index('book_photos_book_id_foreign');
			$table->timestamps();
			$table->integer('order');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_photos');
	}

}
