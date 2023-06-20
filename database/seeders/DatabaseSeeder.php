<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permissionAddUser = Permission::create(['name' => 'add user']);
        $permissionAccessPtbs = Permission::firstOrCreate(['name' => 'access-ptbs']);
        $permissionEditPtbs = Permission::firstOrCreate(['name' => 'edit-ptbs']);
        $permissionAccessMonevs = Permission::firstOrCreate(['name' => 'access-monevs']);
        $permissionEditMonevs = Permission::firstOrCreate(['name' => 'edit-monevs']);
        
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAdmin->syncPermissions([$permissionAddUser, $permissionAccessPtbs, $permissionEditPtbs, $permissionAccessMonevs, $permissionEditMonevs]);

        $roleMonevOnly = Role::create(['name' => 'monev-only']);
        $roleMonevOnly->syncPermissions([$permissionAccessMonevs, $permissionEditMonevs]);

        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin'),
            'remember_token' => null,
            'email_verified_at' => now(),
        ]);
        $user->assignRole($roleAdmin);

        $this->call([
            MonevSeeder::class,
            AkademikSeeder::class,
            DiktendikSeeder::class,
            KemahasiswaanSeeder::class,
            PtbSeeder::class,
        ]);
    }
}
