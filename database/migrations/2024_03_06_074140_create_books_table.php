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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->unique();
            $table->string('accesion_number')->unique();
            $table->string('author', 255);
            $table->integer('publication_year'); // Changed from string to integer
            $table->string('publication_address', 255);
            $table->string('title', 255);
            $table->string('category', 255)->nullable();
            $table->integer('quantity');
            $table->string('level', 255);
            $table->string('pages', 255); // Corrected spelling
            $table->string('edition', 255);
            $table->string('status', 255);
            $table->integer('total_borrow');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
