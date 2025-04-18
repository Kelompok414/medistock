<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Clear cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Define all permissions from the use case diagram
        $permissions = [
            'registrasi',
            'manajemen kadaluarsa',
            'manajemen inventaris',
            'manajemen pembelian',
            'manajemen kasir',
            'sistem peringatan & notifikasi',
            'pelaporan',
            'pengaturan & konfigurasi',
            'pencarian & filter',
            'detail obat',
            'manajemen penjualan',
        ];

        // Create permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $kasirRole = Role::firstOrCreate(['name' => 'kasir']);

        // Assign permissions to roles
        $adminPermissions = [
            'registrasi',
            'manajemen kadaluarsa',
            'manajemen inventaris',
            'manajemen pembelian',
            'manajemen kasir',
            'sistem peringatan & notifikasi',
            'pelaporan',
            'pengaturan & konfigurasi',
            'pencarian & filter',
            'detail obat',
        ];

        $kasirPermissions = [
            'manajemen penjualan',
            'pencarian & filter',
            'detail obat',
        ];

        $adminRole->syncPermissions($adminPermissions);
        $kasirRole->syncPermissions($kasirPermissions);
    }
}
