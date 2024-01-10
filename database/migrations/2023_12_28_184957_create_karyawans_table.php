<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id('karyawan_id');
            $table->string('nama_karyawan');
            $table->string('jabatan');
            $table->decimal('gaji', 10, 2); // Jika menggunakan gaji desimal, sesuaikan panjang dan skala
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
};