<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('company', function(Blueprint $table) {
            $table->increments('guid');
            $table->string('name')->nullable();
            $table->integer('plan_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('last_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('company');
    }

}
