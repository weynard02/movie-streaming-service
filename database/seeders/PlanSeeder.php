<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // plans
        // id
        // name
        // price
        $plan = array("free", "paid", "admin");
        $price = array(0, 17500, 0);
        $len = count($plan);
        for($i=0;$i<$len;$i++) {
            \App\Models\Plan::create([
                'name' => $plan[$i],
                'price' => $price[$i]
            ]);
        }
    }
}
