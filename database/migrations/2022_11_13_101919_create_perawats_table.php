<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerawatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perawats', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('usia');
            $table->enum('jenis_kelamin', ['pria', 'wanita']);
            $table->string('status_pendidikan');
            $table->string('lama_bekerja');
            $table->string('status');
            $table->string('jenjang_karir');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perawats');
    }
}
