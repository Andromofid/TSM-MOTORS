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
        Schema::create('motos', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();

            $table->foreignId('brand_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->unsignedSmallInteger('year')->nullable();

            $table->decimal('price', 10, 2)->nullable();

            $table->unsignedInteger('engine_cc')->nullable();

            $table->unsignedInteger('mileage')->nullable();

            $table->string('condition')->nullable();

            $table->text('description')->nullable();

            $table->boolean('is_featured')->default(false);

            $table->string('status')->default('published');

            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
