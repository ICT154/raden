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
        // Create table services
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama layanan (contoh: Instagram Followers HQ)
            $table->enum('type', ['default', 'package', 'custom_comment', 'comment_likes', 'mention_list', 'mention_hastag', 'mention_follower', 'mention_media', 'poll', 'comment_reply']);
            $table->string('category'); // Kategori (contoh: Instagram Followers)
            $table->decimal('price', 15, 2); // Harga dasar layanan
            $table->integer('min'); // Minimum order
            $table->integer('max'); // Maximum order
            $table->boolean('refill'); // Apakah refill tersedia (1/0)
            $table->text('average_time'); // Waktu pemrosesan rata-rata
            $table->text('description')->nullable(); // Deskripsi layanan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop table services
        Schema::dropIfExists('services');
    }
};
