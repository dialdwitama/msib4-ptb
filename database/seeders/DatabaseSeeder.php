<?php

declare(strict_types=1);

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $permission = Permission::create(['name' => 'add user']);
        $role = Role::create(['name' => 'admin']);

        $role->givePermissionTo($permission);

        $user = User::query()
            ->create([
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin'),
                'remember_token' => null,
                'email_verified_at' => now(),
            ]);

        $user->assignRole($role);

        $this->call([
            MonevSeeder::class,
            AkademikSeeder::class,
            DiktendikSeeder::class,
            KemahasiswaanSeeder::class,
            PtbSeeder::class,
        ]);
    }
}
