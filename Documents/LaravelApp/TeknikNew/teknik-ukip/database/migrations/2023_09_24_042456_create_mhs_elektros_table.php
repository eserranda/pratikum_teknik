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
        Schema::create('mhs_elektros', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs'); // Kolom nama_mhs bertipe string
            $table->string('nim'); // Kolom nim bertipe string
            $table->string('konsentrasi'); // Kolom konsentrasi bertipe string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mhs_elektros');
    }
};
