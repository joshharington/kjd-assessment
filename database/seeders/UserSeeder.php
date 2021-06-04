<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $password = Hash::make('12345678a!');

        $admin_user = new User;
        $admin_user->name = 'Admin';
        $admin_user->email = 'admin@test.com';
        $admin_user->password = $password;
        $admin_user->save();

        $admin_role = Role::where('name', 'Admin')->first();
        $admin_user->assignRole($admin_role);

        $author_user = new User;
        $author_user->name = 'Author';
        $author_user->email = 'author@test.com';
        $author_user->password = $password;
        $author_user->save();

        $author_role = Role::where('name', 'Author')->first();
        $author_user->assignRole($author_role);

        $publisher_user = new User;
        $publisher_user->name = 'Publisher';
        $publisher_user->email = 'publisher@test.com';
        $publisher_user->password = $password;
        $publisher_user->save();

        $publisher_role = Role::where('name', 'Publisher')->first();
        $publisher_user->assignRole($publisher_role);

        $client_user = new User;
        $client_user->name = 'Client';
        $client_user->email = 'client@test.com';
        $client_user->password = $password;
        $client_user->save();

        $client_role = Role::where('name', 'Client')->first();
        $client_user->assignRole($client_role);
    }
}
