<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            // Drop old string column
            if (Schema::hasColumn('teachers', 'department')) {
                $table->dropColumn('department');
            }

            // Add foreign key column only if it doesn't exist
            if (!Schema::hasColumn('teachers', 'department_id')) {
                $table->unsignedBigInteger('department_id')->nullable()->after('id');

                $table->foreign('department_id')
                    ->references('id')
                    ->on('departments')
                    ->onDelete('set null');
            }
        });
    }

    public function down(): void
    {
        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['department_id']);
            $table->dropColumn('department_id');

            $table->string('department')->nullable(); // restore old column
        });
    }
};

