<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationmasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicationmaster', function(Blueprint $table)
		{
			$table->integer('application_id', true);
			$table->string('application_name', 100);
			$table->boolean('application_status')->nullable()->default(0);
			$table->integer('domain_id');
			$table->integer('apptype_id');
			$table->integer('category_id');
			$table->string('application_executable')->nullable();
			$table->boolean('is_blocked')->nullable();
			$table->integer('guid')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applicationmaster');
	}

}
