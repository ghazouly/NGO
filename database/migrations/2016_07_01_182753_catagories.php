<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Catagories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// catagories table
		Schema::create('catagories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title')
					->unique();
			$table->boolean('active');
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
		Schema::drop('catagories');
	}

}
