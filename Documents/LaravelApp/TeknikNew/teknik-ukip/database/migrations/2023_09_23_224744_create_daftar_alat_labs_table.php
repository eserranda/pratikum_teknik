<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('daftar_alat_labs', function (Blueprint $table) {
            $table->id(); // Kolom id otomatis
            $table->string('nama_alat'); // Kolom nama_alat dengan tipe string
            $table->string('nama_labs'); // Kolom nama_labs dengan tipe string
            $table->integer('jumlah'); // Kolom jumlah dengan tipe integer
            $table->string('satuan'); // Kolom satuan dengan tipe string
            $table->timestamps(); // Kolo
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('daftar_alat_labs');
    }
};
