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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penyimpanan')->constrained('penyimpanans')->onDelete('cascade');
            $table->string('peminjam_name');
            $table->string('no_kk'); 
            $table->enum('category', ['PS2', 'PS3', 'PS4', 'PS5']);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status_pembayaran', ['pending', 'confirmed', 'completed'])->default('pending');
            $table->enum('status_pinjaman_barang', ['in_use', 'finished'])->default('finished');
            $table->integer('harga')->nullable();
            $table->enum('approve_status', ['approved', 'rejected', 'pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
