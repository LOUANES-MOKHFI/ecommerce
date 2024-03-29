<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTranslationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_translation', function (Blueprint $table) {
          
            $table->increments('id');
            $table->integer('setting_id')->unsigned();
            $table->string('locale');
            $table->longText('value')->nullable();
            $table->unique(['setting_id','locale']);
            $table->foreign('setting_id')->references('id')->on('setting')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_translation');
    }
}
