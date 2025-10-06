<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Filament\Forms\Components\Select;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produk_legalitas', function (Blueprint $table) {
            $table->id('id_produk_legalitas');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_legalitas');

            $table->foreign('id_produk')
                ->references('id_produk')
                ->on('produks')
                ->cascadeOnDelete();

            $table->foreign('id_legalitas')
                ->references('id_legalitas')
                ->on('legalitas')
                ->cascadeOnDelete();
                
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produk_legalitas');
    }
};
