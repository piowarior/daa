<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hasil_penelitians', function (Blueprint $table) {
            $table->id('id_hasil'); // ID unik untuk hasil penelitian
            $table->unsignedBigInteger('id_penelitian'); // ID penelitian terkait
            $table->foreign('id_penelitian')->references('id_penelitian')->on('penelitians')->onDelete('cascade'); // Relasi ke tabel penelitians
            $table->text('deskripsi'); // Deskripsi hasil penelitian
            $table->date('tanggal_selesai'); // Tanggal selesai penelitian
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_penelitians');
    }
};
