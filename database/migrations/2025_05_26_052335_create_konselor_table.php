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
        Schema::create('konselor', function (Blueprint $table) {
            $table->id();
            $table->integer('kodekonselor');
            $table->string('email');
            $table->string('password');
            $table->string('nama');
            $table->enum('jenis_kelamin',['Pria','Wanita']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konselor');
    }
};
