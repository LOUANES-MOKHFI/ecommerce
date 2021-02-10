<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states_translations', function (Blueprint $table) {
            $table->id();
            $table->integer('states_id');
            $table->string('locale');
            $table->string('name');
            $table->unique(['states_id','locale']);
            $table->foreign('states_id')->references('id')->on('states')->onDelete('cascade');
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
        Schema::dropIfExists('states_translations');
    }
}
