<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlarmsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alarms', function(Blueprint $table)
		{
			$table->bigInteger('alarm_id', true);
			$table->text('alarm_name')->nullable();
			$table->boolean('alarm_match')->nullable()->default('');
			$table->integer('created_by')->nullable();
			$table->dateTime('created_on')->nullable();
			$table->integer('modified_by')->nullable();
			$table->dateTime('modified_on')->nullable();
			$table->boolean('alarm_status')->nullable()->default('');
			$table->integer('guid')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alarms');
	}

}
