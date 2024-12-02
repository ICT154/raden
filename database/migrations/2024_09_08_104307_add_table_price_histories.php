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
        // Create table price_histories
        Schema::create('price_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel services
            $table->foreignId('prepaid_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel prepaid_services
            $table->foreignId('game_streaming_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel game_services
            $table->foreignId('manual_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel manual_services

            $table->decimal('old_price', 15, 2); // Harga lama
            $table->decimal('new_price', 15, 2); // Harga baru
            $table->timestamp('change_date'); // Tanggal perubahan harga
            $table->string('description')->nullable(); // Deskripsi perubahan
            $table->timestamps(); // Created at, updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table price_histories
        Schema::dropIfExists('price_histories');
    }
};
