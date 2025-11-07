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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id('id_berita');
            $table->string('judul');
            $table->string('slug')->nullable()->unique();
            $table->text('deskripsi_singkat')->nullable();
            $table->text('isi_berita')->nullable();
            $table->string('jenis')->nullable();
            $table->string('penulis')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

        public function down()
        {
            Schema::table('beritas', function (Blueprint $table) {
                $table->dropColumn('slug');
            });
        }
    };
