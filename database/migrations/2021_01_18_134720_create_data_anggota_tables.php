<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAnggotaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_anggota', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anggota');
            $table->string('slug');
            $table->bigInteger('NIK');
            $table->string('ttl');
            $table->char('jenis_kelamin',15);
            $table->string('pekerjaan');
            $table->string('alamat');
            $table->bigInteger('nomor_tlp');
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
        Schema::dropIfExists('data_anggota');
    }
}
