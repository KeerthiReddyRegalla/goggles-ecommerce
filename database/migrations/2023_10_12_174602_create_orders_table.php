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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedFloat('total')->default(0.0);
            $table->string('full_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('address_type')->nullable();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
