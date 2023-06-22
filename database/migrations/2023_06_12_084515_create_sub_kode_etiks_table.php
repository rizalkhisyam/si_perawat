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
            $table->bigInteger('kode_etik_id')->unsigned();
            $table->foreign('kode_etik_id')->references('id')->on('kode_etiks')->onDelete('cascade');
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
