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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Agen
            $table->string('nama');
            $table->text('description')->nullable();
            $table->decimal('harga', 15, 2);
            $table->string('alamat');
            $table->enum('type', ['rumah', 'tanah', 'ruko']);
            $table->enum('status', ['tersedia', 'terjual'])->default('tersedia');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
