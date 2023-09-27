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
        Schema::create('nama_labs', function (Blueprint $table) {
            $table->id(); // Kolom id otomatis
            $table->string('nama'); // Kolom nama dengan tipe string
            $table->timestamps(); // Kolom timestamps created
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_labs');
    }
};
