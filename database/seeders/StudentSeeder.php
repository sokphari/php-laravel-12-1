<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            'users_id' => 1,
            'name'     => "chamrong",
            'gender'   => "male",
            'email'    => 'chamrong@etec.com',
            'password' => '123456'
        ]);
    }
}
