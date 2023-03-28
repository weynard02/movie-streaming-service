<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "admin",
            'email' => "admin@disney-minus-coldmoon.com",
            'password' => bcrypt("12345"),
            'remember_token' => Str::random(),
            'plan_id' => 3
        ]); 
    }
}
