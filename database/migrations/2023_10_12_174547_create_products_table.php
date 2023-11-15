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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->float('price');
            $table->float('discounted_price');
            $table->float('qty');
            $table->string('type');
            $table->longText('description');
            $table->boolean('featured')->default(false);
            $table->integer('rating')->default(1);
            $table->text('thumbnail_image')->nullable();
            $table->json('images')->nullable();
            $table->foreignId('category_id')->nullable()->references('id')->on('categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
