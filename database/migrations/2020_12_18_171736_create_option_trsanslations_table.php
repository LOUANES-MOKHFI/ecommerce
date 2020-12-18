<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionTrsanslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('options_id')->unsigned();
            $table->string('locale');
            $table->string('name');
            $table->unique(['options_id','locale']);
            $table->foreign('options_id')->references('id')->on('options')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options_translations');
    }
}
