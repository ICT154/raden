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
        // Create table balance_transactions
        Schema::create('balance_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Referensi ke tabel users
            $table->enum('type', ['credit', 'debit', 'adjustment']); // Tipe transaksi (credit/debit)
            $table->decimal('amount', 15, 2); // Jumlah transaksi
            $table->text('description')->nullable(); // Deskripsi transaksi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table balance_transactions
        Schema::dropIfExists('balance_transactions');
    }
};
