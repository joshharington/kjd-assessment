<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $client_role = Role::create(['name' => 'Client']);
        $author_role = Role::create(['name' => 'Author']);
        $publisher_role = Role::create(['name' => 'Publisher']);
        $admin_role = Role::create(['name' => 'Admin']);

        $create_product_permission = Permission::create(['name' => 'create product']);
        $edit_product_permission = Permission::create(['name' => 'edit product']);
        $delete_product_permission = Permission::create(['name' => 'delete product']);
        $publish_product_permission = Permission::create(['name' => 'publish product']);

        $create_user_permission = Permission::create(['name' => 'create user']);
        $edit_user_permission = Permission::create(['name' => 'edit user']);
        $delete_user_permission = Permission::create(['name' => 'delete user']);

        $author_role->syncPermissions([$create_product_permission, $edit_product_permission]);
        $publisher_role->syncPermissions([$create_product_permission, $edit_product_permission, $delete_product_permission, $publish_product_permission]);
        $admin_role->syncPermissions([$create_product_permission, $edit_product_permission, $delete_product_permission, $publish_product_permission, $create_user_permission, $edit_user_permission, $delete_user_permission]);

    }
}
