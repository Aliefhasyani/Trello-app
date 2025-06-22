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
                $table->id(); // Laravel's own ID
                $table->unsignedBigInteger('course_id')->unique(); // API's ID
                $table->string('sku')->nullable();
                $table->string('pic')->nullable();
                $table->string('title');
                $table->text('coupon')->nullable();
                $table->string('org_price')->nullable();
                $table->longText('desc_text')->nullable();
                $table->string('category')->nullable();
                $table->string('language')->nullable();
                $table->string('platform')->nullable();
                $table->float('rating')->default(0);
                $table->float('duration')->nullable();
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
