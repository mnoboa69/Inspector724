<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupmasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groupmaster', function(Blueprint $table)
		{
			$table->integer('groupmaster_id', true);
			$table->string('group_name', 100);
			$table->boolean('group_status')->nullable()->default(0);
			$table->integer('guid');
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
		Schema::drop('groupmaster');
	}

}
