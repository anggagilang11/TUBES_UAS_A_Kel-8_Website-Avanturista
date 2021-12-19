<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPaketWisataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_paket_wisata', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('kategori_paket_wisata_id')->unsigned();
            $table->string('image')->nullable();
            $table->string('nama')->nullable();
            $table->string('slug')->nullable();
            $table->longText('deskripsi')->nullable();
            $table->integer('harga')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('kategori_paket_wisata_id')->references('id')->on('tb_kategori_paket_wisata')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_paket_wisata');
    }
}
