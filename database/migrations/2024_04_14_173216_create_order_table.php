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
        Schema::create('order', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->decimal('subTotal', 10, 2); // Decimal column for subTotal (total 10 digits, 2 decimal places)
            $table->decimal('discount', 10, 2)->default(0); // Decimal column for discount (total 10 digits, 2 decimal places, default value of 0)
            $table->decimal('grandTotal', 10, 2); // Decimal column for grandTotal (total 10 digits, 2 decimal places)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
