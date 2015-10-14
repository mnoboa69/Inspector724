<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agentusers', function(Blueprint $table)
		{
			$table->string('username');
			$table->integer('guid');
			$table->string('alias_name')->nullable();
			$table->smallInteger('is_active')->default(0);
			$table->string('computer_name', 100)->nullable();
			$table->integer('created_by')->nullable();
			$table->date('created_on')->nullable();
			$table->integer('modified_by')->nullable();
			$table->date('modified_on')->nullable();
			$table->integer('agent_id', true);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agentusers');
	}

}
