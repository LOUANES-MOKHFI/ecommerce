<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devi_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('devi_id');
            $table->integer('product_id');
            $table->integer('brand_id');
            $table->string('color');
            $table->string('format');
            $table->string('surfaces');
            $table->string('m_carrees');
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
        Schema::dropIfExists('devi_details');
    }
}
