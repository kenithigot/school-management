<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('course')->insert([
            // Business Courses
            ['course_name' => 'Bachelor of Business Administration (BBA)', 'course_code' => 'BBA', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 1],
            ['course_name' => 'Bachelor of Science in Business Management (BSBM)', 'course_code' => 'BSBM', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 1],
            ['course_name' => 'Bachelor of Science in Marketing Management (BSMM)', 'course_code' => 'BSMM', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 1],
            ['course_name' => 'Bachelor of Science in Office Administration (BSOA)', 'course_code' => 'BSOA', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 1],
            ['course_name' => 'Bachelor of Science in Business Administration (BSBA)', 'course_code' => 'BSBA', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 1],

            // Social Science Courses
            ['course_name' => 'Bachelor of Arts in Psychology', 'course_code' => 'BAP', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 2],
            ['course_name' => 'Bachelor of Arts in Political Science', 'course_code' => 'BAPS', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 2],
            ['course_name' => 'Bachelor of Arts in Sociology', 'course_code' => 'BAS', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 2],
            ['course_name' => 'Bachelor of Arts in History', 'course_code' => 'BAH', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 2],
            ['course_name' => 'Bachelor of Arts in Communication', 'course_code' => 'BAC', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 2],

            // Technology and Engineering Courses
            ['course_name' => 'Bachelor of Science in Information Technology (BSIT)', 'course_code' => 'BSIT', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 3],
            ['course_name' => 'Bachelor of Science in Information Systems (BSIS)', 'course_code' => 'BSIS', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 3],
            ['course_name' => 'Bachelor of Science in Computer Science (BSCS)', 'course_code' => 'BSCS', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 3],
            ['course_name' => 'Bachelor of Science in Computer Engineering (BSCpE)', 'course_code' => 'BSCpE', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 3],
            ['course_name' => 'Bachelor of Science in Electronics Engineering (BSEE)', 'course_code' => 'BSEE', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 3],

            //Education Courses
            ['course_name' => 'Bachelor of Elementary Education (BEED)', 'course_code' => 'BEED', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 4],
            ['course_name' => 'Bachelor of Special Needs Education (BSNEd)', 'course_code' => 'BSNEd', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 4],
            ['course_name' => 'Bachelor of Early Childhood Education (BECEd)', 'course_code' => 'BECEd', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 4],
            ['course_name' => 'Bachelor of Physical Education (BPEd)', 'course_code' => 'BPEd', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 4],
            ['course_name' => 'Bachelor of Technical-Vocational Teacher Education (BTVTEd)', 'course_code' => 'BTVTEd', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 4],

            // Criminology Courses
            ['course_name' => 'Bachelor of Science in Criminology', 'course_code' => 'BSCrim', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 5],
            ['course_name' => 'Bachelor of Science in Criminology and Criminal Justice', 'course_code' => 'BSCrimCJ', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 5],
            ['course_name' => 'Bachelor of Science in Forensic Science', 'course_code' => 'BSFS', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 5],
            ['course_name' => 'Bachelor of Science in Public Safety and Security', 'course_code' => 'BSPS', 'description' => 'Add description here', 'course_status' => 'active', 'department_id' => 5],
        ]);
    }
}
