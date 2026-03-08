<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Irdes alghraibah',
            'email' => 'alghraibahidrees@gmail.com',
            'password' => Hash::make('ss123123')
        ]);

        // Create user with sami@g.com email and hashed password
        User::factory()->create([
            'name' => 'Sami User',
            'email' => 'sami@g.com',
            'password' => Hash::make('ss123123')
        ]);

        // Call the ContactsSeeder
        $this->call(ContactSeeder::class);
    }
}
