<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTermsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terms', function(Blueprint $table)
		{
			$table->bigInteger('term_id', true)->unsigned();
			$table->string('name', 200)->default('')->index('name');
			$table->string('slug', 200)->default('')->index('slug');
			$table->bigInteger('term_group')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('terms');
	}

}
