<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // ml, ff, pubg, dll
            $table->string('name'); // Mobile Legends, Free Fire, dll
            $table->string('developer'); // Moonton, Garena, dll
            $table->string('icon'); // emoji atau path gambar
            $table->string('bg_gradient'); // linear-gradient CSS
            $table->string('currency'); // Diamond, UC, VP, dll
            $table->boolean('is_popular')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};