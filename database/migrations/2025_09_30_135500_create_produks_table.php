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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk');
            $table->string('kode_produk');
            $table->string('deskripsi_singkat')->nullable();
            $table->text('deskripsi_lengkap')->nullable();
            $table->decimal('harga', 12, 2)->nullable();
            $table->json('attachments')->nullable();

            // Foreign Key
            $table->unsignedBigInteger('id_umkm');
            $table->unsignedBigInteger('id_kategori');
            $table->unsignedBigInteger('id_admin');

            $table->foreign('id_umkm')
                  ->references('id_umkm')
                  ->on('umkms')
                  ->cascadeOnDelete();

            $table->foreign('id_kategori')
                  ->references('id_kategori')
                  ->on('kategoris')
                  ->cascadeOnDelete();

            $table->foreign('id_admin')
                  ->references('id_admin')
                  ->on('users')
                  ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }

};
