<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(
            [
                'name' => 'admin',
                'email' => 'josh@admin.com',
                'email_verified_at' => now(),
                'password' => 'password', // password
                'remember_token' => Str::random(10),
            ]
            );
        $user->assignRole('admin');
    }
}
