<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'usherbdm@gmail.com';

        // Check if user already exists (idempotent)
        if (!User::where('email', $email)->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => $email,
                'password' => Hash::make('Wehlo2020'),
            ]);

            $this->command->info("Admin user created: {$email}");
        } else {
            $this->command->info("Admin user already exists: {$email}");
        }
    }
}
