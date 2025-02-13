<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RolesEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'User name',
            'email' => 'user@example.com',
        ])->assignRole(RolesEnum::User->value);

        User::factory()->create([
            'name' => 'Vendor name',
            'email' => 'vendor@example.com',
        ])->assignRole(RolesEnum::Vendor->value);

        User::factory()->create([
            'name' => 'Admin name',
            'email' => 'admin@example.com',
        ])->assignRole(RolesEnum::Admin->value);
    }
}
