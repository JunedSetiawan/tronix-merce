<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create permissions
        $permissions = [
            'view users',
            'create users',
            'edit users',
            'delete users',
            'view roles',
            'create roles',
            'edit roles',
            'delete roles',
            'view products',
            'create products',
            'edit products',
            'delete products',
            'view discounts',
            'create discounts',
            'edit discounts',
            'delete discounts',
            'view orders',
            'create orders',
            'edit orders',
            'delete orders',
            'view categories',
            'create categories',
            'edit categories',
            'delete categories',
            'view settings',
            'edit settings',
        ];

        foreach ($permissions as $permission) {
            \App\Models\Permission::create([
                'name' => $permission,
            ]);
        }

        // create roles

        $roles = [
            'admin',
            'user',
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create([
                'name' => $role,
            ]);
        }

        // assign permissions to roles

        $admin = \App\Models\Role::where('name', 'admin')->first();

        $admin->givePermissionTo(\App\Models\Permission::all());

        $user = \App\Models\Role::where('name', 'user')->first();

        $user->givePermissionTo([
            'view products',
            'view discounts',
            'view orders',
            'view categories',
            'view settings',

            'create orders',
            'edit orders',
            'delete orders',

        ]);
    }
}
