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
        Schema::create('assignment', function (Blueprint $table) {
            $table->id();
            $table->string('assignment_title');
            $table->string('description');
            $table->string('department');
            $table->string('course');
            $table->string('subject');
            $table->string('year_level');
            $table->string('due_date');
            $table->string('time_close');
            $table->string('assignment_type');
            $table->string('submission_mode');
            $table->string('total_point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment');
    }
};
