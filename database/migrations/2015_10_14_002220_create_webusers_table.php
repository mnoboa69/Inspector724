<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webusers', function(Blueprint $table)
		{
			$table->integer('webuser_id', true);
			$table->string('email_address');
			$table->integer('role_id');
			$table->integer('guid');
			$table->string('password', 100);
			$table->string('timezone_name', 100)->default('0');
			$table->string('date_format', 20)->nullable()->default('0');
			$table->integer('created_by')->nullable();
			$table->dateTime('created_on')->nullable();
			$table->integer('modified_by')->nullable();
			$table->date('modified_on')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('webusers');
	}

}
