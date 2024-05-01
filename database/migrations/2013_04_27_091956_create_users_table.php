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
            $table->unsignedBigInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('unique_id')->unique()->nullable(false); // Make the column nullable
            $table->string('lastname')->nullable(); // Make the column nullable
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('gender')->nullable();
            $table->integer('cpnumber')->nullable();
            $table->string('level')->nullable();
            $table->string('course')->nullable();
            $table->string('department')->nullable();
            $table->string('year')->nullable();
            $table->string('grade')->nullable();
            $table->string('strand')->nullable();
            $table->string('section')->nullable();
            $table->string('user_image')->nullable();
            $table->string("password")->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('status')->nullable();
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
