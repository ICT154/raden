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
        // Create table service_histories
        Schema::create('service_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Referensi ke tabel users
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel services
            $table->foreignId('prepaid_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel prepaid_services
            $table->foreignId('game_streaming_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel game_services
            $table->foreignId('manual_service_id')->nullable()->constrained()->onDelete('set null'); // Referensi ke tabel manual_services

            $table->string('service_type'); // 'social_media', 'prepaid', 'game_streaming', 'manual'
            $table->string('action'); // 'add', 'update', 'delete'
            $table->text('description')->nullable(); // Deskripsi tambahan
            $table->timestamp('action_date'); // Tanggal dan waktu aksi
            $table->timestamps(); // Created at, updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table service_histories
        Schema::dropIfExists('service_histories');
    }
};
