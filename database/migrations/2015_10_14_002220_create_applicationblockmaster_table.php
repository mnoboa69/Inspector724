<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationblockmasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applicationblockmaster', function(Blueprint $table)
		{
			$table->integer('application_id');
			$table->integer('group_id');
			$table->primary(['application_id','group_id'], 'pk_application_group_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applicationblockmaster');
	}

}
