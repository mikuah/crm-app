<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'marketing']);
        Role::create(['name' => 'hod']);
        Role::create(['name' => 'technician']);
        Role::create(['name' => 'cater']);
        Role::create(['name' => 'finance']);
        Role::create(['name' => 'tenant']);
    }
}
