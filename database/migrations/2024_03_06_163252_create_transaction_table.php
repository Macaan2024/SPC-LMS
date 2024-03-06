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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users');
            $table->unsignedBigInteger('books_id');
            $table->foreign('books_id')->references('id')->on('books');
            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_day');
            $table->time('end_time');
            $table->time('duration');
            $table->string('status');
            $table->time('overdues');
            $table->decimal('penalty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
