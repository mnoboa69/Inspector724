<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGroupmasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('groupmaster', function(Blueprint $table)
		{
			$table->foreign('guid', 'fk_company_guid')->references('guid')->on('company')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('groupmaster', function(Blueprint $table)
		{
			$table->dropForeign('fk_company_guid');
		});
	}

}
