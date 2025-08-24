<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create([
            'role_name' => 'superadmin'
        ]);
        UserRole::create([
            'role_name' => 'administrator'
        ]);
        UserRole::create([
            'role_name' => 'user'
        ]);
    }
}
