<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTermTaxonomyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('term_taxonomy', function(Blueprint $table)
		{
			$table->bigInteger('term_taxonomy_id', true)->unsigned();
			$table->bigInteger('term_id')->unsigned()->default(0);
			$table->string('taxonomy', 32)->default('')->index('taxonomy');
			$table->text('description');
			$table->bigInteger('parent')->unsigned()->default(0);
			$table->bigInteger('count')->default(0);
			$table->unique(['term_id','taxonomy'], 'term_id_taxonomy');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('term_taxonomy');
	}

}
