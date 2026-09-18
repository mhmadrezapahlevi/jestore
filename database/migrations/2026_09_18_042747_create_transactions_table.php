<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('order_id')->unique(); // JE-XXXXXX
            $table->foreignId('game_id')->constrained();
            $table->foreignId('package_id')->constrained();
            $table->string('user_id'); // ID player game
            $table->string('server_id')->nullable(); // Zone ID
            $table->string('payment_method'); // QRIS, GoPay, dll
            $table->integer('total_price');
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};