<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateLinksTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->bigInteger('link_id', true)->unsigned();
            $table->string('link_url')->default('');
            $table->string('link_name')->default('');
            $table->string('link_image')->default('');
            $table->string('link_target', 25)->default('');
            $table->string('link_description')->default('');
            $table->string('link_visible', 20)->default('Y')->index('link_visible');
            $table->bigInteger('link_owner')->unsigned()->default(1);
            $table->integer('link_rating')->default(0);
            $table->dateTime('link_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('link_rel')->default('');
            $table->text('link_notes', 16777215);
            $table->string('link_rss')->default('');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('links');
    }

}
