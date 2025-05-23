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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            // Student personal info
            $table->string('first_name');
            $table->string('middle_name')->default('');
            $table->string('last_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('contact_number');
            $table->string('email')->unique();

            // Guardian info
            $table->string('guardian_first_name');
            $table->string('guardian_middle_name')->default('');
            $table->string('guardian_last_name');
            $table->string('guardian_contact_number');
            $table->string('guardian_relationship');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};