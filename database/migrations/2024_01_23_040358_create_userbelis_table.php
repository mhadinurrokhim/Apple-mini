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
        Schema::create('userbelis', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah');
            $table->string('metode_pembayaran');
            $table->string('total');
            $table->string('foto');
            $table->string('keterangan');
            $table->string('adminstatus');
            $table->string('pembelianstatus');
            $table->foreignId('produk_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userbelis');
    }
};
