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
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->unsignedBigInteger('order_id');  
            $table->unsignedBigInteger('product_id');  
            $table->decimal('price', 10, 2); 
            $table->integer('qty');  
            $table->decimal('sub_amount', 10, 2);  
            $table->decimal('discount', 10, 2)->default(0);  
            $table->string('discount_type')->nullable();  
            $table->decimal('grand_amount', 10, 2);  
            $table->timestamps();  

            // Add foreign key constraints
            $table->foreign('order_id')->references('id')->on('order')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
