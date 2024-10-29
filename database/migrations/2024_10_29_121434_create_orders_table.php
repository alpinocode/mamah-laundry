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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tanggalMasuk');
            $table->string('status');
            $table->decimal('order_transaksi', 8);
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('service_id')->references('id')->on('services')->constrained('services')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('tanggalKeluar');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
