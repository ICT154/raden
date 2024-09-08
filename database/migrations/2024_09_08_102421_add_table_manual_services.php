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
        // Create table game_streaming_service_prices
        Schema::create('manual_services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama layanan manual
            $table->text('description')->nullable(); // Deskripsi layanan
            $table->decimal('price', 15, 2); // Harga dasar layanan
            $table->string('status')->default('active'); // Status layanan (active/inactive)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table manual_services
    }
};
