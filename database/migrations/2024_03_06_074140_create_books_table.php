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
            $table->integer('isbn')->unique();
            $table->string('author');
            $table->string('publicationyear');
            $table->string('publicationaddress');
            $table->string('title');
            $table->string('category');
            $table->integer('quantity');
            $table->string('level');
            $table->string('langguage');
            $table->string('edition');
            $table->string('availability');
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
