<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConditionsoptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conditionsoptions', function(Blueprint $table)
		{
			$table->integer('conditionsoptions_id', true);
			$table->string('conditionsoptions_title', 300)->nullable();
			$table->string('conditionsoptions_value', 300)->nullable();
			$table->string('operator', 50)->nullable();
			$table->string('operand', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conditionsoptions');
	}

}
