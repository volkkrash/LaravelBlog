<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('menu_id')->unsigned()->default('0');
            $table->string('title');
            $table->string('slug');
            $table->integer('page_block_one_id')->unsigned();
            $table->integer('page_block_two_id')->unsigned();

            $table->foreign('page_block_one_id')->references('id')->on('page_block_one')->onDelete('cascade');
            $table->foreign('page_block_two_id')->references('id')->on('page_block_two')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
