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
        // add column cookie at table users after column remember_token
        Schema::table('users', function (Blueprint $table) {
            $table->string('cookie')->after('remember_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop column cookie at table users
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cookie');
        });
    }
};
