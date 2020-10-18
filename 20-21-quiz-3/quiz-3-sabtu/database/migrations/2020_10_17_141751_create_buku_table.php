<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->integer('jumlah_halaman');
            $table->string('tahun_terbit');
            $table->string('genre');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('penerbit_id');
            $table->foreign('kategori_id')->references('id')->on('kategori');
            $table->foreign('penerbit_id')->references('id')->on('penerbit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
