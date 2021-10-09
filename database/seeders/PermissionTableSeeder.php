<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorities = config('permission.authorities');

        $listpermission = [];
        $adminpermission = [];
        $userpermission = [];

        foreach ($authorities as $label  => $permissions) {
            foreach ($permissions as $permission) {
                $listpermission[] = [
                    'name' => $permission,
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ];
                //admin
                $adminpermission[] = $permission;

                if (in_array($label, ['manage_posts'])) {
                    $userpermission[] = $permission;
                }
            }
        }

        //add permission
        Permission::insert($listpermission);

        //insert roles
        //admin
        $admin = Role::create(
            [
                'name' => "admin",
                'guard_name' => 'web',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
        //user
        $user = Role::create(
            [
                'name' => "user",
                'guard_name' => 'web',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );

        //role -> permission
        $admin->givePermissionTo($adminpermission);
        $user->givePermissionTo($userpermission);

        $useradmin = User::find(1)->assignRole('admin');
        $user = User::find(2)->assignRole('user');
        $user = User::find(3)->assignRole('user');
    }
}
