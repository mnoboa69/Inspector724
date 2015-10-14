<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserprofilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userprofiles', function(Blueprint $table)
		{
			$table->integer('userprofiles_id', true);
			$table->integer('webuser_id')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->date('birthday')->nullable();
			$table->integer('gender')->nullable();
			$table->string('occupation')->nullable();
			$table->string('mobile_number', 50)->nullable();
			$table->string('website', 300)->nullable();
			$table->string('email', 300)->nullable();
			$table->text('about')->nullable();
			$table->text('profile_image')->nullable();
			$table->dateTime('created')->nullable();
			$table->dateTime('updated')->nullable();
			$table->string('country', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userprofiles');
	}

}
