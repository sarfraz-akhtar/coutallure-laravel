<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name');
			$table->longText('description');
			$table->integer('author_id')->unsigned();
			$table->integer('forum_id')->unsigned();
			$table->timestamps();
		});
		Schema::create('forum_post_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('path');

			$table->integer('forum_post_id')->unsigned();
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
		Schema::drop('forum_posts');
		Schema::drop('forum_post_images');
	}

}
