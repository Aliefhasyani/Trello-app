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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); 
            $table->string('course_url')->unique(); 
            $table->string('title'); 
            $table->string('category')->nullable();
            $table->string('pic')->nullable(); 
            $table->decimal('org_price', 10, 2)->nullable(); 
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->text('desc_text')->nullable(); 
            $table->text('coupon')->nullable(); 
            $table->timestamp('expiry')->nullable(); 
            $table->timestamp('savedtime')->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
