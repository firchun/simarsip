<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 30)->unique();
            $table->string('nama');
            $table->enum('jenis_kelamin', ['Pria', 'Wanita']);
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('email')->unique();
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
        Schema::dropIfExists('pegawai');
    }
};