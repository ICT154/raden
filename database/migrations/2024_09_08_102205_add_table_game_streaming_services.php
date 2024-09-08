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
        // Create table game_streaming_services
        Schema::create('game_streaming_services', function (Blueprint $table) {
            $table->id();
            $table->string('trxid'); // ID transaksi
            $table->string('data'); // Data (contoh: ID user game)
            $table->string('zone')->nullable(); // Zona game (contoh: 2685)
            $table->string('service'); // Nama layanan (contoh: Mobile Legends B - 1048 Diamonds)
            $table->enum('status', ['success', 'pending', 'failed']); // Status transaksi
            $table->text('note')->nullable(); // Catatan tambahan
            $table->decimal('price', 15, 2); // Harga dasar layanan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table game_streaming_services
        Schema::dropIfExists('game_streaming_services');
    }
};
