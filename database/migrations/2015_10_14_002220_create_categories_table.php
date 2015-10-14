<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->integer('category_id', true);
			$table->string('category_name');
			$table->boolean('category_status')->nullable()->default(0);
			$table->integer('created_by')->nullable();
			$table->dateTime('created_on')->nullable();
			$table->integer('modified_by')->nullable();
			$table->dateTime('modified_on')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categories');
	}

}
