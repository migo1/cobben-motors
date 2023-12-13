<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::whereEmail('admin@test.com')->first();
        if (is_null($user)) {
            $user = User::create([
                'name' => 'Super Administrator',
                'email' => 'admin@test.com',
                'password' => bcrypt('s3cr3t#@!')
            ]);
        }

        $role = Role::findOrCreate('Administrator');

        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);

    }
}
