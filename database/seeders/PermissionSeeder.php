<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = ['mahasiswa', 'dosen', 'tugasakhir', 'berita', 'galeri', 'contact', 'partner', 'mediasocial', 'tentangkami', 'slider', 'user'];

        $actions = ['view', 'create', 'edit', 'delete'];

        foreach ($models as $model) {
            foreach ($actions as $action) {
                Permission::firstOrCreate(['name' => $action . ' ' . $model]);
            }
        }

        // Additional permissions
        Permission::firstOrCreate(['name' => 'manage users']);
        Permission::firstOrCreate(['name' => 'manage permissions']);
    }
}
