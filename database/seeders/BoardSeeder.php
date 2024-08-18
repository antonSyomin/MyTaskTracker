<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('boards')->insert([
            'title' => Str::random(10),
            'content' => Str::random(50),
            'password' => Hash::make('password'),
        ]);
    }
}
