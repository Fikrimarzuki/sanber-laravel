<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveForeignKeyBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buku', function(Blueprint $table) {
            $table->dropForeign(['kategori_id']);
            $table->dropForeign(['penerbit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buku', function(Blueprint $table) {
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('penerbit_id')->references('id')->on('penerbit');
        });
    }
}
