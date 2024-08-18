<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Board;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()
        ->count(10)
        ->has(Board::factory()->count(2))
        ->create();
    }
}
