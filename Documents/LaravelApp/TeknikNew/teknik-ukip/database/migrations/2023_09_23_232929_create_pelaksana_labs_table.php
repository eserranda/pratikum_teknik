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
        Schema::create('pelaksana_labs', function (Blueprint $table) {
            $table->id();
            $table->string('labs'); // Kolom labs bertipe string
            $table->string('praktikum'); // Kolom praktikum bertipe string
            $table->string('pengelola_labs'); // Kolom pengelola_labs bertipe string
            $table->string('pelaksana_labs'); // Kolom pelaksana_labs bertipe string
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaksana_labs');
    }
};
