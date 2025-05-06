<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_types')->insert([
            ['type_name' => 'Admin'],
            ['type_name' => 'Teacher'],
            ['type_name' => 'Student'],
            ['type_name' => 'Parent'],
            ['type_name' => 'Registrar'],
            ['type_name' => 'Principal'],
            ['type_name' => 'Accountant'],
            ['type_name' => 'Librarian'],
            ['type_name' => 'It Support']
        ]);
    }
}
