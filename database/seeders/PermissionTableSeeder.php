<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $permissions = [
                 'create-role',
                 'edit-role',
                 'delete-role',
                 'create-user',
                 'edit-user',
                 'delete-user',
                 'role-list',
              ];

        foreach ($permissions as $permission) {
            Permission::findOrCreate($permission);
        }

    }
}
