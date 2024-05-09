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
        Schema::create('product', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('name');  
            $table->decimal('price', 10, 2);  
            $table->text('description')->nullable();  
            $table->string('image')->nullable();  
            $table->unsignedBigInteger('category_id');  
            $table->decimal('cost', 10, 2);  
            $table->integer('qty')->default(0);  
            $table->timestamp('createdAt')->useCurrent();  
            $table->boolean('isDeleted')->default(false); 
            $table->timestamps();  
        });
         
        // Add foreign key constraint
        Schema::table('product', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
