<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john@doe.us', 'password' => bcrypt('12345678')],
            ['name' => 'Jane Doe', 'email' => 'jane@doe.us', 'password' => bcrypt('12345678'), 'is_admin' => true],
            ['name' => 'John Smith', 'email' => 'john@smith.uk', 'password' => bcrypt('12345678')],
        ];
        
        foreach ($users as $user) {
            \App\Models\User::create($user);
        }
    }
}
