<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApitokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apitoken', function(Blueprint $table)
		{
			$table->integer('apitoken_id', true);
			$table->integer('agent_id')->nullable();
			$table->string('token', 500)->nullable();
			$table->integer('lifetime')->nullable();
			$table->dateTime('created_time')->nullable();
			$table->integer('guid')->nullable();
			$table->integer('apiauthentication_id')->nullable();
			$table->text('mac_address')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apitoken');
	}

}
