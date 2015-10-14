<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlarmConditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alarm_conditions', function(Blueprint $table)
		{
			$table->bigInteger('alarm_condition_id', true);
			$table->text('alarm_condition_title')->nullable();
			$table->string('alarm_condition_operation', 300)->nullable();
			$table->string('alarm_condition_value_with_comp', 300)->nullable();
			$table->boolean('alarm_condition_is_case_sensitive')->nullable();
			$table->integer('alarm_action_id')->nullable();
			$table->integer('alarm_id')->nullable();
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
		Schema::drop('alarm_conditions');
	}

}
