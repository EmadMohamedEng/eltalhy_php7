<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBookPhotosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('book_photos', function(Blueprint $table)
		{
			$table->foreign('book_id')->references('id')->on('books')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('book_photos', function(Blueprint $table)
		{
			$table->dropForeign('book_photos_book_id_foreign');
		});
	}

}
