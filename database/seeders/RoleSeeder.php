<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate(
            [
                'id' => 1
            ],
            [
                'id' => 1,
                'name' => 'superadmin'
            ]
        );

        Role::updateOrCreate(
            [
                'id' => 2
            ],
            [
                'id' => 2,
                'name' => 'operator'
            ]
        );
    }
}
