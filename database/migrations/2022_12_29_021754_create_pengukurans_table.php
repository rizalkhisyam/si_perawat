<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengukuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengukurans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ruangan');
            $table->bigInteger('id_perawat')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->bigInteger('id_ruangan')->unsigned();
            $table->foreign('id_ruangan')->references('id')->on('ruangans');
            $table->integer('skor_1')->nullable();
            $table->integer('skor_2')->nullable();
            $table->integer('skor_3')->nullable();
            $table->integer('skor_4')->nullable();
            $table->integer('skor_5')->nullable();
            $table->integer('total_skor')->nullable();
            $table->string('nilai_interval')->nullable();
            $table->string('nilai_perilaku')->nullable();
            $table->string('kategori_nilai')->nullable();
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
        Schema::dropIfExists('pengukurans');
    }
}
