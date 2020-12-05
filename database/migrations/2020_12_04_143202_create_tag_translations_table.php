<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tags_id')->unsigned();
            $table->string('locale');
            $table->string('name');

            $table->unique(['tags_id','locale']);
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags_translations');
    }
}
