<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlarmActionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alarm_actions', function(Blueprint $table)
		{
			$table->bigInteger('alarm_action_id', true);
			$table->boolean('alarm_action_is_terminate')->nullable()->default('');
			$table->boolean('alarm_action_is_popup')->nullable()->default('');
			$table->text('alarm_action_popup_message')->nullable();
			$table->boolean('alarm_action_is_email')->nullable()->default('');
			$table->string('alarm_action_email_to', 300)->nullable();
			$table->string('alarm_action_email_subject', 400)->nullable();
			$table->text('alarm_action_email_message')->nullable();
			$table->boolean('alarm_action_is_screen_shot')->nullable()->default('');
			$table->boolean('alarm_action_screenshot_mode')->nullable()->default('');
			$table->integer('created_by')->nullable();
			$table->dateTime('created_on')->nullable();
			$table->integer('modified_by')->nullable();
			$table->dateTime('modified_on')->nullable();
			$table->integer('alarm_id')->nullable();
			$table->string('alarm_action_time_gap', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alarm_actions');
	}

}
