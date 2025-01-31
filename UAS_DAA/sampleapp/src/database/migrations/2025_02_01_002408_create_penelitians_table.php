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
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id('id_penelitian'); // ID unik untuk penelitian
            $table->string('judul', 255); // Judul penelitian
            $table->string('bidang', 255); // Bidang penelitian
            $table->unsignedBigInteger('id_tim'); // ID tim yang bertanggung jawab
            $table->foreign('id_tim')->references('id')->on('tim_rnd')->onDelete('cascade'); // Relasi ke tabel tim_rnd
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penelitians');
    }
};
