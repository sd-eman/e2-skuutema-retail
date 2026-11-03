<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['stock manager', 'store manager', 'customer service', 'management'] as $name) {
            Role::create(['name' => $name]);
        }
    }
}
