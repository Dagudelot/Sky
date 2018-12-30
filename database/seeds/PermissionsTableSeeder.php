<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Files permissions
        Permission::create(['name' => 'file.create', 'description' => 'Upload file']);
        Permission::create(['name' => 'file.store', 'description' => 'Save file']);
        Permission::create(['name' => 'file.images', 'description' => 'View images']);
        Permission::create(['name' => 'file.videos', 'description' => 'View videos']);
        Permission::create(['name' => 'file.docs', 'description' => 'View docs']);
        Permission::create(['name' => 'file.audios', 'description' => 'View audios']);

        //Roles permissions
        Permission::create(['name' => 'role.index', 'description' => 'View roles']);
        Permission::create(['name' => 'role.edit', 'description' => 'Edit roles']);
        Permission::create(['name' => 'role.update', 'description' => 'Update roles']);
        Permission::create(['name' => 'role.delete', 'description' => 'Delete roles']);
        Permission::create(['name' => 'role.create', 'description' => 'Create roles']);
        Permission::create(['name' => 'role.store', 'description' => 'Save roles']);
        Permission::create(['name' => 'role.show', 'description' => 'Show role']);

        $admin = Role::create(['name' => 'Admin']);
        $client = Role::create(['name' => 'client']);

        $admin->givePermissionTo(Permission::all());
        $client->givePermissionTo([
        	'file.create',
        	'file.store',
        	'file.images',
            'file.videos'
        ]);

        $user = User::find(1);
        $user->assignRole('Admin');
    }
}
