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
        Schema::create('variation_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->index()->constrained('products')->cascadeOnDelete();
            $table->string('name'); // Color   |   // Size
            $table->string('type'); // Image   |   // Radio or dropdown
        });

        Schema::create('variation_type_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('variation_type_id')->index()->constrained('variation_types')->cascadeOnDelete();
            $table->string('name'); //black    |   // Large
        });

        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->index()->constrained('products')->cascadeOnDelete();
            $table->json('variation_type_option_ids');
            $table->integer('quantity')->nullable();
            $table->decimal('price', 20, 4)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_types');
        Schema::dropIfExists('variation_type_options');
        Schema::dropIfExists('product_variations');
    }
};
