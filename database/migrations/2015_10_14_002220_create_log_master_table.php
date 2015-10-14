<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogMasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_master', function(Blueprint $table)
		{
			$table->integer('user_id')->nullable();
			$table->integer('application_id')->nullable();
			$table->dateTime('start_time')->nullable();
			$table->dateTime('end_time')->nullable();
			$table->text('title')->nullable();
			$table->integer('total_time')->nullable();
			$table->integer('type_of_log')->nullable();
			$table->text('url')->nullable()->default('0');
			$table->string('executable', 300)->nullable();
			$table->integer('guid')->nullable();
			$table->dateTime('created')->nullable();
			$table->dateTime('updated')->nullable();
			$table->bigInteger('log_master_id', true);
			$table->boolean('alam_or_activity')->nullable()->default('');
			$table->integer('agent_user_id')->nullable();
			$table->integer('agent_computer_id')->nullable();
			$table->text('description')->nullable();
			$table->boolean('actionterminated')->nullable();
			$table->boolean('actionpopup')->nullable();
			$table->boolean('actionscreenshot')->nullable();
			$table->boolean('actionemail')->nullable();
			$table->text('image')->nullable();
			$table->text('primary_url')->nullable();
			$table->string('ProcessId', 100)->nullable();
			$table->string('SessionId', 100)->nullable();
			$table->string('IpAddress', 200)->nullable();
			$table->string('keystrokes', 300)->nullable();
			$table->string('mouseclicks', 300)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_master');
	}

}
