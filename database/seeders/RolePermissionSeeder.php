<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Administrator role
        $adminRole = DB::table('roles')->where('name', 'administrator')->first();
        $adminPermissions = [
            'manage-users',
            'manage-roles',
            'manage-customers',
            'manage-invoices',
            'manage-payments'
        ];
        foreach ($adminPermissions as $permission) {
            $permissionId = DB::table('permissions')->where('name', $permission)->value('id');
            DB::table('role_permissions')->insert([
                'role_id' => $adminRole->id,
                'permission_id' => $permissionId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Manager role
        $managerRole = DB::table('roles')->where('name', 'manager')->first();
        $managerPermissions = [
            'manage-customers',
            'manage-invoices',
            'manage-payments'
        ];
        foreach ($managerPermissions as $permission) {
            $permissionId = DB::table('permissions')->where('name', $permission)->value('id');
            DB::table('role_permissions')->insert([
                'role_id' => $managerRole->id,
                'permission_id' => $permissionId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Staff role
        $staffRole = DB::table('roles')->where('name', 'staff')->first();
        $staffPermissions = [
            'manage-own-invoices',
            'manage-own-payments',
            'view-customers'
        ];
        foreach ($staffPermissions as $permission) {
            $permissionId = DB::table('permissions')->where('name', $permission)->value('id');
            DB::table('role_permissions')->insert([
                'role_id' => $staffRole->id,
                'permission_id' => $permissionId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Customer role
        $customerRole = DB::table('roles')->where('name', 'customer')->first();
        $customerPermissions = [
            'view-own-invoices',
            'view-own-payments',
        ];
        foreach ($customerPermissions as $permission) {
            $permissionId = DB::table('permissions')->where('name', $permission)->value('id');
            DB::table('role_permissions')->insert([
                'role_id' => $customerRole->id,
                'permission_id' => $permissionId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
