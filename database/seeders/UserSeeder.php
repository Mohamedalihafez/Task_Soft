<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            [
                'id' => 1
            ],
            [
                'id' => 1,
                'name' => 'superadmin',
                'role_id' => 1,
                'email'=> 'admin@admin.com',
                'password' => bcrypt('password'),
            ]
        );

        User::updateOrCreate(
            [
                'id' => 2
            ],
            [
                'id' => 2,
                'name' => 'operator',
                'role_id' => 2,
                'email'=> 'operator@operator.com',
                'password' => bcrypt('password'),
            ]
        );
    }
}
