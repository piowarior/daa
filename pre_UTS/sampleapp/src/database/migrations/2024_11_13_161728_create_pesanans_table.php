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
            $table->unsignedId('id_inventaris');
            $table->string('peminjam_name');
            $table->string('no_kk'); 
            $table->string('email');
            $table->enum('category', ['PS2', 'PS3', 'PS4', 'PS5']);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status_pembayaran', ['pending', 'confirmed', 'completed'])->default('pending');
            $table->enum('status_pinjaman_barang', ['in_use', 'finished'])->default('finished');
            $table->integer('harga')->nullable();
            $table->timestamps();

             // Tambahkan constraint foreign key dengan benar
             $table->foreign('id_inventaris')
             ->references('id')
             ->on('inventaris') // Pastikan nama tabel benar
             ->onDelete('cascade');

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
