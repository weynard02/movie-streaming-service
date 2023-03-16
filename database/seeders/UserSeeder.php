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
        \App\Models\User::create([
            'name' => "bagas",
            'email' => "bagas@gmail.com",
            'password' => "123456789",
            'plan_id' => 2
        ]); 
    }
}
