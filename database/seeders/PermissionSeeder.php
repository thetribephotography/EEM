<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maklad\Permission\Models\Role;
use Maklad\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('maklad.permission.cache');

        Permission::firstOrCreate(['name' => 'create_expense']);
        Permission::firstOrCreate(['name' => 'view_user_expense']);
        Permission::firstOrCreate(['name' => 'edit_expense']);
        Permission::firstOrCreate(['name' => 'view_all_user']);
        Permission::firstOrCreate(['name' => 'view_all_expense']);
        Permission::firstOrCreate(['name' => 'change_status']);


        $employee_user = Role::where('name', 'employee')->first();

        $employee_permission = [
            'create_expense',
            'view_user_expense',
            'edit_expense',
        ];

        foreach ($employee_permission as $permission) {
            $employee_user->givePermissionTo($permission);
        }


        $admin_user = Role::where('name', 'admin')->first();

        $admin_user_permissions = [
            'view_all_user',
            'view_all_expense',
            'change_status',
        ];

        foreach ($admin_user_permissions as $permission) {
            $admin_user ->givePermissionTo($permission);
        }
    }
}
