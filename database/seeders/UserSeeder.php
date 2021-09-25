<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = User::create([
            'name' => 'Administrator',
            'email'  => 'admin@laravel.com',
            'password' => bcrypt('admin12345')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'email'  => 'user@laravel.com',
            'password' => bcrypt('user12345')
        ]);

        $user->assignRole('user');
    }
}
