<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('uid');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
                        $table->integer('age')->nullable();
                        $table->string('sex')->nullable();
                        $table->boolean('status')->default(1);
                        $table->string('picture');
			$table->rememberToken();
//                        $table->timestamp('');
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
		Schema::drop('users');
	}

}
