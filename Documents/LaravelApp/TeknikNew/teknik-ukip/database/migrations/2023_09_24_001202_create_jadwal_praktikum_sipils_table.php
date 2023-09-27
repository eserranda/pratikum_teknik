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
        Schema::create('jadwal_praktikum_sipils', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Kolom tanggal bertipe date
            $table->string('labs'); // Kolom labs bertipe string
            $table->string('dosen'); // Kolom dosen bertipe string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_praktikum_sipils');
    }
};
