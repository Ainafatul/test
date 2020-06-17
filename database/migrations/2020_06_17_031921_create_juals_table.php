<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kategori')->unsigned;
            $table->foreign('id_kategori')->references('id')->on('kategoris');
            // $table->string('kategori');
            $table->string('nm_properti');
            $table->integer('kmr_mandi');
            $table->integer('kmr_tidur');
            $table->integer('lantai');
            $table->integer('luas_tanah');
            $table->integer('luas_bangunan');
            $table->text('alamat');
            $table->string('harga');
            $table->text('keterangan');
            $table->string('image');
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
        Schema::dropIfExists('juals');
    }
}
