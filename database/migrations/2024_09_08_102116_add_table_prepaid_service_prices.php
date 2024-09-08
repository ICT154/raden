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
        // Create table prepaid_service_prices
        Schema::create('prepaid_service_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prepaid_service_id')->constrained()->onDelete('cascade'); // Referensi ke tabel prepaid_services
            $table->enum('level', ['bronze', 'silver', 'gold']); // Level pengguna
            $table->decimal('price', 15, 2); // Harga berdasarkan level
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table prepaid_service_prices
        Schema::dropIfExists('prepaid_service_prices');
    }
};
