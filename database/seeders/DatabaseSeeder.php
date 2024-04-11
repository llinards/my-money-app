<?php

namespace Database\Seeders;

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

//        Salary::factory()->create([
//            'user_id' => $user->id,
//            'date' => '2024-03-27',
//        ]);

//        Salary::factory()->create([
//            'user_id' => $user->id,
//            'date' => '2024-04-29',
//        ]);
    }
}
