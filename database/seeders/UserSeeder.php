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
        User::create([
            'name' => 'Jose Luis Buenaño',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin12345')
        ])->assignRole('Admin');

        User::factory(4)->create();
    }
}
