<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::insert(
            [
                'roles_name' => "admin",
            ],

        );
        Roles::insert(
            [
                'roles_name' => "instructor",
            ],

        );
        Roles::insert(
            [
                'roles_name' => "student",
            ],

        );
    }
}
