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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('company_name');
            $table->string('KVK_number')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('street');
            $table->string('house_number');
            $table->string('zipcode');
            $table->string('location');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('function');
            $table->foreignId('company_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
