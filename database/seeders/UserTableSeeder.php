<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $allUsers = [
            [
                'unique_id'  => 'admin1',
                'first_name' => 'Admin',
                'last_name'  => 'Admin',
                'email'      => 'admin@gmail.com',
                'password'   => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role'       => 'admin',
            ],
            [
                'unique_id'  => 'user1',
                'first_name' => 'User',
                'last_name'  => 'User',
                'email'      => 'user@gmail.com',
                'password'   => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role'       => 'user',
            ],
            [
                'unique_id'  => 'guest1',
                'first_name' => 'Guest',
                'last_name'  => 'Guest',
                'email'      => 'user2@gmail.com',
                'password'   => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role'       => 'user',
            ],
            [
                'unique_id'  => 'superadmin',
                'first_name' => 'Super Admin',
                'last_name'  => 'Super Admin',
                'email'      => 'moderator@gmail.com',
                'password'   => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'role'       => 'master',
            ],
        ];

        foreach ($allUsers as $user) {
            User::create($user);
        }
    }
}
