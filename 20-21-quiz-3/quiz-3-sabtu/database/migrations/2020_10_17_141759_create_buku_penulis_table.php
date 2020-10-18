<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuPenulisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku_penulis', function (Blueprint $table) {
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('penulis_id');
            $table->foreign('buku_id')->references('id')->on('buku');
            $table->foreign('penulis_id')->references('id')->on('penulis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku_penulis');
    }
}
