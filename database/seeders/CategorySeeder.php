<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronics',
                'department_id' => 1,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fashion',
                'department_id' => 2,
                'parent_id' => null,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Computer',
                'department_id' => 1,
                'parent_id' => 1, // Parent is Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Smartphones',
                'department_id' => 1,
                'parent_id' => 1, // Parent is Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Computer',
                'department_id' => 1,
                'parent_id' => 1, // Parent is Electronics
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // subcategories of Computers (depth 2)
            [
                'name' => 'Laptops',
                'department_id' => 1,
                'parent_id' => 3, // Parent is Computers
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Desktops',
                'department_id' => 1,
                'parent_id' => 3, // Parent is Computers
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],

             // subcategories of Smartphone (depth 2)
             [
                'name' => 'Androids',
                'department_id' => 1,
                'parent_id' => 4, // Parent is Smartphones
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Iphones',
                'department_id' => 1,
                'parent_id' => 4, // Parent is Smartphones
                'active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
