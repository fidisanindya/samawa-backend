<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            // 'bornday' => '2002-09-09',
            'gender' => 'male',
            'province' => 'Jawa Timur',
            'city' => 'surabaya',
            'phone' => '081234567890',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'is_verified' => 0,
            'role' => 0,
        ]);

        \App\Models\User::factory(10)->create();
    }
}
