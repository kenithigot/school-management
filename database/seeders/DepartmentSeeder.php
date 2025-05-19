<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            ['department_name' => 'Business & Management'],
            ['department_name' => 'Social Science'],
            ['department_name' => 'Technology & Engineering'],
            ['department_name' => 'Education'],
            ['department_name' => 'Criminology']         
        ]);
    }
}
