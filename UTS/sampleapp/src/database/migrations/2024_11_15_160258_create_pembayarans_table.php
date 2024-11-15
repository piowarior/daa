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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('no_pembayaran')->unique();
            $table->decimal('jumlah', 10, 2); 
            $table->enum('metode', ['transfer_bank', 'e_wallet', 'tunai']);
            $table->string('referensi')->nullable();
            $table->date('tanggal_bayar');
            $table->enum('status', ['menunggu', 'selesai', 'gagal'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
