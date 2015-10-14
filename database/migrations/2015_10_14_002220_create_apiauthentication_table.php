<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiauthenticationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apiauthentication', function(Blueprint $table)
		{
			$table->integer('apiauthentication_id', true);
			$table->string('app_id', 300)->nullable();
			$table->string('api_key', 500)->nullable();
			$table->integer('webuser_id');
			$table->boolean('status')->nullable();
			$table->string('hexcode', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apiauthentication');
	}

}
