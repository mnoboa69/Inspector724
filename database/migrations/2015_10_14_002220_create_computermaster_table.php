<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComputermasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('computermaster', function(Blueprint $table)
		{
			$table->string('computer_name', 300)->nullable();
			$table->string('mac_address', 300)->nullable();
			$table->integer('guid')->nullable();
			$table->integer('created_by')->nullable();
			$table->dateTime('created_on')->nullable();
			$table->integer('modified_by')->nullable();
			$table->dateTime('modified_on')->nullable();
			$table->integer('computermaster_id', true);
			$table->boolean('show_log_for_this_comp')->nullable()->default(DB::raw('1'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('computermaster');
	}

}
