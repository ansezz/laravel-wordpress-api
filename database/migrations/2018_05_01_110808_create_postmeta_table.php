<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostmetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postmeta', function(Blueprint $table)
		{
			$table->bigInteger('meta_id', true)->unsigned();
			$table->bigInteger('post_id')->unsigned()->default(0)->index('post_id');
			$table->string('meta_key')->nullable()->index('meta_key');
			$table->text('meta_value')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('postmeta');
	}

}
