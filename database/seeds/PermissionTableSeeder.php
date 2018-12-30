<?php

use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'file.create']);
        Permission::create(['name' => 'file.store']);
        Permission::create(['name' => 'file.images']);
        Permission::create(['name' => 'file.videos']);
        Permission::create(['name' => 'file.docs']);
        Permission::create(['name' => 'file.audios']);

        $admin = Role::create(['name' => 'Admin']);
        $client = Role::create(['name' => 'client']);

        $admin->givePermissionTo(Permission::all());
        $client->givePermissionTo([
        	'file.create',
        	'file.store',
        	'file.images',
        ]);

        $user = User::find(1);
        $user->assignRole('Admin');
    }
}
