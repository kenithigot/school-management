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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            $table->string('first_name');
            $table->string('middle_name')->default('');
            $table->string('last_name');
            $table->timestamps();
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('contact_number');
            $table->string('email')->unique();

            // Profession Info
            $table->string('department');
            $table->string('employment_type');
            $table->string('date_hired');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};