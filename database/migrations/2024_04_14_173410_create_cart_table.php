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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productId');
            $table->integer('qty');
            $table->unsignedBigInteger('userId');
            $table->timestamps();

            // Add foreign key constraints
            $table->foreign('userId')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('productId')->references('id')->on('product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart');
    }
};
