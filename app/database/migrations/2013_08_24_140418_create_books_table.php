<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('author');
			$table->string('description');
			$table->string('lang');
			$table->float('rating');
			$table->string('pdf_path');
			$table->string('epub_path');
			$table->string('cover');
			$table->integer('print_votes')->default(0);
			$table->integer('like_votes')->default(0);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
