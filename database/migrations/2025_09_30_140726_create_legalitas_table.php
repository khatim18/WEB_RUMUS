<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('legalitas', function (Blueprint $table) {
            $table->id('id_legalitas');
            $table->string('nama_legalitas')->unique();
            $table->string('slug')->unique();
            $table->string('penerbit')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('legalitas');
    }
};