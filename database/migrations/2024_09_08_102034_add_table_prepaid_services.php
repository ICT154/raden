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
        // Create table prepaid_services
        Schema::create('prepaid_services', function (Blueprint $table) {
            $table->id();
            $table->string('trxid'); // ID transaksi
            $table->string('data'); // Data prepaid (contoh: nomor HP)
            $table->string('code'); // Kode layanan (contoh: SHNX25)
            $table->string('service'); // Nama layanan (contoh: Xl 25.000)
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
        // Drop table prepaid_services
        Schema::dropIfExists('prepaid_services');
    }
};
