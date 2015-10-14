<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApplicationExceptionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('application_exception', function(Blueprint $table)
		{
			$table->integer('guid');
			$table->integer('application_id');
			$table->string('application_name', 100);
			$table->boolean('application_exp_status')->nullable()->default(0);
			$table->integer('domain_id');
			$table->integer('apptype_id');
			$table->integer('category_id');
			$table->string('application_executable', 300)->nullable();
			$table->primary(['guid','application_id'], 'pk_company_guid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('application_exception');
	}

}
