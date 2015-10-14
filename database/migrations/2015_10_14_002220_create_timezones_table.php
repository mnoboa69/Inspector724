<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimezonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timezones', function(Blueprint $table)
		{
			$table->string('timezone_name', 100);
			$table->string('date_format', 20)->nullable();
			$table->integer('timezone_id', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('timezones');
	}

}
