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
        
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Agen
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2);
            $table->string('address');
            $table->enum('type', ['rumah', 'tanah', 'ruko']);
            $table->enum('status', ['tersedia', 'terjual'])->default('tersedia');
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('property_category', function (Blueprint $table) {
        $table->foreignId('property_id')->constrained('properties')->onDelete('cascade');
        $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        $table->primary(['property_id', 'category_id']);
    });
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('property_id')->constrained('properties')->onDelete('cascade');
        $table->foreignId('buyer_id')->constrained('users')->onDelete('cascade');
        $table->date('transaction_date');
        $table->decimal('amount', 15, 2);
        $table->enum('status', ['pending', 'success', 'canceled'])->default('pending');
        $table->timestamps();
    });

    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('property_category');
        Schema::dropIfExists('properties');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');
    }
};
