<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'user']);
        $role2 = Role::create(['name' => 'writer']);
        $role2->givePermissionTo('create articles', 'edit articles', 'delete articles');

        $role3 = Role::create(['name' => 'admin']);
        $role3->givePermissionTo(['publish articles', 'unpublish articles']);
    }
}
