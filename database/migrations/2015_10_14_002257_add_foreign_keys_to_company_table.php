<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('company', function(Blueprint $table)
		{
			$table->foreign('plan_id', 'fk_plan_id')->references('plan_id')->on('plans')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('company', function(Blueprint $table)
		{
			$table->dropForeign('fk_plan_id');
		});
	}

}
