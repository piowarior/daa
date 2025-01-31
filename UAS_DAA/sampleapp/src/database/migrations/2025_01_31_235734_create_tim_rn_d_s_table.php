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
    Schema::create('tim_rnd', function (Blueprint $table) {
        $table->id();
        $table->string('nama_tim', 255);
        $table->string('ketua_tim', 255);
        $table->string('peneliti', 255);
        $table->string('ahli_teknologi', 255);
        $table->string('analis_data', 255);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tim_rnd');
    }
};
