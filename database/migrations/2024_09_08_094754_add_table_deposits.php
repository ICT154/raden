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
        // Create table deposits
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Referensi ke tabel users
            $table->string('payment_method'); // 'midtrans', 'manual'
            $table->string('transaction_id')->nullable(); // Transaksi dari Midtrans
            $table->decimal('amount', 15, 2); // Jumlah deposit
            $table->decimal('fee', 15, 2)->default(0); // Biaya administrasi (opsional)
            $table->decimal('total', 15, 2); // Jumlah total setelah fee
            $table->string('status')->default('pending'); // 'pending', 'completed', 'failed'
            $table->timestamp('approved_at')->nullable(); // Waktu deposit disetujui
            $table->string('manual_receipt')->nullable(); // Bukti transfer manual (jika deposit manual)
            $table->timestamps(); // Created at, updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table deposits
        Schema::dropIfExists('deposits');
    }
};
