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
        Schema::create('konseling', function (Blueprint $table) {
            $table->id();
            $table->integer('kodekonseling');
            $table->integer('konselor_id');
            $table->integer('siswa_id');
            $table->enum('status',['Menunggu Konselor','Diproses','Selesai','Dibatalkan','Ditolak']);
            $table->text('pesan');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konseling');
    }
};
