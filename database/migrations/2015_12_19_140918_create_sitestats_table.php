<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitestatsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sitestats', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('admins');
			$table->string('mods');
			$table->string('hdo');
			$table->string('ranks');
			$table->string('wealth');
			$table->string('cars');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sitestats');
	}

}
