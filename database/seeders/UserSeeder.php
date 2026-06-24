<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'roles_id' => 1,
            'name'     => 'vesith',
            'email'    => 'vesith@etec.com',
            'password' => Hash::make('password123')
        ]);
    }
}
