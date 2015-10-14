<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTokenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('token', function(Blueprint $table)
		{
			$table->integer('token_id', true);
			$table->string('token', 500);
			$table->boolean('status')->default(0);
			$table->string('email_address');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('token');
	}

}
