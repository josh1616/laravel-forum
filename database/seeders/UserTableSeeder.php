<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user -> name = 'Mike Richardson';
        $user -> email = 'hello@example.com';
        $user -> password = 'password';

        User::factory()->count(5)->create();
    }

    
}