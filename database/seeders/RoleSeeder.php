<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_dosen = Role::updateOrCreate(['name' => 'dosen']);
        $role_mhs = Role::updateOrCreate(['name' => 'mahasiswa',]);
        $role_guest = Role::updateOrCreate(['name' => 'guest']);

        Permission::updateOrCreate(['name' => 'view_profile']);
        Permission::updateOrCreate(['name' => 'view_perkuliahan']);
        Permission::updateOrCreate(['name' => 'view_master']);
        Permission::updateOrCreate(['name' => 'view_galery']);
        Permission::updateOrCreate(['name' => 'view_pages']);

        $role_dosen->givePermissionTo('view_profile');
        $role_dosen->givePermissionTo('view_perkuliahan');
        $role_dosen->givePermissionTo('view_master');
        $role_dosen->givePermissionTo('view_galery');
        $role_mhs->givePermissionTo('view_profile');
        $role_mhs->givePermissionTo('view_perkuliahan');
        $role_guest->givePermissionTo('view_profile');
        $role_guest->givePermissionTo('view_pages');

        $dsn_user = User::find(1);
        $dsn_user->assignRole('dosen');

        $mhs_user = User::find(2);
        $mhs_user->assignRole('Mahasiswa');


        $guest_user = User::find(3);
        $guest_user->assignRole(['guest']);
        
        $coba_user = User::find(4);
        $coba_user->assignRole(['dosen']);

    }
}
