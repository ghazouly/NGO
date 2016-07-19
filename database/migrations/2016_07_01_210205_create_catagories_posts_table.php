<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatagoriesPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('catagories_posts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('posts_id')->unsigned();
            $table->foreign('posts_id')->references('id')->on('posts');
            $table->integer('catagories_id')->unsigned();
            $table->foreign('catagories_id')->references('id')->on('catagories');
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
		Schema::drop('catagories_posts');
	}

}
