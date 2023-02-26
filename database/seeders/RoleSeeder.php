<?php

namespace Database\Seeders;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $roles = [
            [
                'name' => 'administrator',
                'description' => 'Administrator Role',
            ],
            [
                'name' => 'manager',
                'description' => 'Manager Role',
            ],
            [
                'name' => 'staff',
                'description' => 'Staff Role',
            ],
            [
                'name' => 'customer',
                'description' => 'Customer Role',
            ],
        ];
        
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}