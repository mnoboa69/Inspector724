<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApplicationExceptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('application_exception', function(Blueprint $table)
		{
			$table->foreign('apptype_id', 'fk_apptype_id')->references('applicationtype_id')->on('applicationtype')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('category_id', 'fk_category_id')->references('category_id')->on('categories')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('domain_id', 'fk_domain_id')->references('domain_id')->on('domains')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('application_exception', function(Blueprint $table)
		{
			$table->dropForeign('fk_apptype_id');
			$table->dropForeign('fk_category_id');
			$table->dropForeign('fk_domain_id');
		});
	}

}
