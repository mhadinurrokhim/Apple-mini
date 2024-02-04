<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->integer('total');
            $table->foreignId('user_id')->constrained('users')->restrictOnDelete();
            $table->string('metode_pembayaran')->default('');
            $table->string('metode_pengiriman')->default('');
            $table->enum('status', ['pending', 'shipped', 'delivered', 'completed'])->default('pending');
            $table->date('tanggal_pengiriman')->nullable()->default(null);
            $table->date('tanggal_menerima')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
