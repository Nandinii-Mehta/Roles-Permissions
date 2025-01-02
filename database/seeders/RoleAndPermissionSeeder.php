<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=Role::create(['name'=>'admin']);
        $user=Role::create(['name'=>'user']);

        Permission::create(['name'=>'manage users']);
        Permission::create(['name'=>'view dashboard']);

        $admin->givePermissionTo(['manage users','view dashboard']);
        $user->givePermissionTo(['view dashboard']);
    }
}
