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
        // Create table order_histories
        Schema::create('order_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Referensi ke tabel users
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel services
            $table->foreignId('prepaid_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel prepaid_services
            $table->foreignId('game_streaming_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel game_services
            $table->foreignId('manual_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel manual_services

            $table->string('order_type'); // 'social_media', 'prepaid', 'game_streaming', 'manual'
            $table->decimal('amount', 15, 2); // Jumlah transaksi
            $table->string('status')->default('pending'); // Status order: 'pending', 'completed', 'failed'
            $table->text('description')->nullable(); // Deskripsi tambahan
            $table->timestamp('order_date'); // Tanggal dan waktu order
            $table->timestamps(); // Created at, updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table order_histories
        Schema::dropIfExists('order_histories');
    }
};
