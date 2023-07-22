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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('featureImage')->nullable();
            $table->decimal('level')->nullable();
            $table->decimal('buy_price')->nullable();
            $table->decimal('sell_price')->nullable();
            $table->foreignId('store_id')->constrained('stores');
            $table->foreignId('unity_id')->constrained('unities');
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
