<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'Manage Users',
                'slug' => 'manage-users',
                'description' => 'Allows user to manage other users',
            ],
            [
                'name' => 'Manage Roles',
                'slug' => 'manage-roles',
                'description' => 'Allows user to manage roles',
            ],
            [
                'name' => 'Manage Customers',
                'slug' => 'manage-customers',
                'description' => 'Allows user to manage customers',
            ],
            [
                'name' => 'Manage Invoices',
                'slug' => 'manage-invoices',
                'description' => 'Allows user to manage invoices',
            ],
            [
                'name' => 'Manage Payments',
                'slug' => 'manage-payments',
                'description' => 'Allows user to manage payments',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}