<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop the existing foreign key constraint referencing students table
            $table->dropForeign(['user_id']);

            // Modify the user_id column to be nullable without foreign key constraint
            $table->unsignedBigInteger('user_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // First, revert column change
            $table->unsignedBigInteger('user_id')->change();

            // Add foreign key constraint back to students table (if needed)
            $table->foreign('user_id')->references('id')->on('students')->onDelete('cascade');
        });
    }
};
