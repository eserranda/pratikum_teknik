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
        Schema::create('daftar_alat_labs_elektros', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->string('laboratorium');
            $table->string('percobaan')->nullable();
            $table->string('nomor_id')->nullable(); // Kolom nomor_id boleh kosong atau null
            $table->string('tipe')->nullable(); // Kolom tipe boleh kosong atau null
            $table->integer('jumlah');
            $table->string('satuan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_alat_labs_elektros');
    }
};
