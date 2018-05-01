<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTermRelationshipsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('term_relationships', function(Blueprint $table)
		{
			$table->bigInteger('object_id')->unsigned()->default(0);
			$table->bigInteger('term_taxonomy_id')->unsigned()->default(0)->index('term_taxonomy_id');
			$table->integer('term_order')->default(0);
			$table->primary(['object_id','term_taxonomy_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('term_relationships');
	}

}
