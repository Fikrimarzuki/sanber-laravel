<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignkeyPebestSellerPenulisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penulis', function (Blueprint $table) {
            $table->foreign('best_seller_book_id')->references('id')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penulis', function(Blueprint $table) {
            $table->dropForeign(['best_seller_book_id']);
        });
    }
}
