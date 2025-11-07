<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('link_marketplaces', function (Blueprint $table) {
            $table->id('id_link');
            $table->unsignedBigInteger('id_produk');
            $table->string('nama_marketplace');
            $table->string('url')->change();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->string('icon');
            $table->foreign('id_produk')
                  ->references('id_produk')
                  ->on('produks')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('link_marketplaces');
    }
};
