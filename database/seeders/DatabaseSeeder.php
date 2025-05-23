<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserTypesTableSeeder::class,
        ]);

        $this->call([
            TeacherSeeder::class
        ]);

        $this->call([
            DepartmentSeeder::class
        ]);

        $this->call([
            SubjectSeeder::class
        ]);

        $this->call([
            CourseSeeder::class
        ]);
    }
}
