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
        Schema::create('jadwal_praktikum_elektros', function (Blueprint $table) {
            $table->id();
            $table->string('kode_mk'); // Kolom kode_mk bertipe string
            $table->string('praktikum'); // Kolom praktikum bertipe string
            $table->string('sks'); // Kolom sks bertipe string
            $table->string('konsentrasi'); // Kolom konsentrasi bertipe string
            $table->string('semester'); // Kolom semester bertipe string
            $table->string('dosen'); // Kolom dosen bertipe string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_praktikum_elektros');
    }
};
