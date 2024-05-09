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
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('firstName')->nullable(false); // First name
            $table->string('lastName')->nullable(false); // Last name
            $table->string('gender')->nullable(); // Gender
            $table->string('contact')->nullable(); 
            $table->string('email')->unique()->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(false);
            $table->string('userType')->nullable();  
            $table->string('address')->nullable(); 
            // $table->string('remember_token')->nullable(); 
            // $table->rememberToken();
            $table->string('remember_token', 255)->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
