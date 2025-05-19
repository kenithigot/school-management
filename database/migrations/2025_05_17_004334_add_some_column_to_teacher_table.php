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
        Schema::table('teachers', function (Blueprint $table) {
            $table->string('address')->after('last_name');
            $table->string('subjects_handled');
            $table->string('assigned_class');
            $table->string('time_schedule');
            $table->string('attendance_status');
            $table->string('class_adviser');
            $table->string('teacher_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropColumn([
                'address',
                'subjects_handled',
                'assigned_class',
                'time_schedule',
                'attendance_status',
                'class_adviser',
                'teacher_id'
            ]);
        });
    }
};
