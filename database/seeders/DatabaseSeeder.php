<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Linards Lazdiņš',
            'email' => 'linards@linards.com',
            'password' => bcrypt('password'),
        ]);

        Salary::factory()->create([
            'user_id' => $user->id,
            'date' => '2024-04-01',
            'amount' => 1000.00
        ]);

        Salary::factory()->create([
            'user_id' => $user->id,
            'date' => '2024-04-30',
            'amount' => 1000.00
        ]);

        Account::factory()->create([
            'user_id' => $user->id,
            'balance' => 1000.00,
            'daily_limit' => 10.00
        ]);

        User::factory()->create([
            'name' => 'Simona Bērtiņa',
            'email' => 'simona@simona.com',
            'password' => bcrypt('password'),
        ]);
    }
}
