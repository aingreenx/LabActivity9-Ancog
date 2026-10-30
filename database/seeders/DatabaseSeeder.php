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
        User::create([
            'name' => 'Greece',
            'email' => 'nurse.ancog@bakuna.test',
            'password' => Hash::make('bakuna2026'),
        ]);

        $this->call([
            VaccinationSeeder::class,
        ]);
    }
}
