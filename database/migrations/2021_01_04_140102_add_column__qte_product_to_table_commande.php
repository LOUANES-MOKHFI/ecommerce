<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnQteProductToTableCommande extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::table('commande', function (Blueprint $table) {
            $table->string('Qte_product')->after('product_id');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commande', function (Blueprint $table) {
            $table->dropColumn('Qte_product');
        });
    }
}
