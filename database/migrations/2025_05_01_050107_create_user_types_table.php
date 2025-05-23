<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_name')->unique(); // e.g. 'student', 'teacher'
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_types');
    }
};