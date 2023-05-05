<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubKodeEtiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_kode_etiks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kode_etik')->unsigned();
            $table->foreign('id_kode_etik')->references('id')->on('kode_etiks');
            $table->text('aktivitas');
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
        Schema::dropIfExists('sub_kode_etiks');
    }
}
