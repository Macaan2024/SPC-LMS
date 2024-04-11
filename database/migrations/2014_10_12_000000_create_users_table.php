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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique()->nullable(false); // Make the column nullable
            $table->string('lastname')->nullable(false); // Make the column nullable
            $table->string('firstname')->nullable(false);
            $table->string('middlename')->nullable(false);
            $table->string('level')->nullable(false);
            $table->string('section')->nullable(false);
            $table->string('course')->nullable(false);
            $table->string('year')->nullable(false);
            $table->string('gender')->nullable(false);
            $table->integer('cpnumber')->nullable(false);
            $table->string('department')->nullable(false);
            $table->string('status')->nullable(false);
            $table->string('user_image')->nullable(false);
            $table->string("password")->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
