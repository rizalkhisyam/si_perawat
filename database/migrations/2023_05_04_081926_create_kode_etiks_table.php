<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodeEtiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kode_etiks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_category')->unsigned();
            $table->foreign('id_category')->references('id')->on('categorys');
            $table->text('pernyataan');
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
        Schema::dropIfExists('kode_etiks');
    }
}
