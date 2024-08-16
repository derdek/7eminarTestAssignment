<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(4)->create();
        foreach ($users as $user) {
            $orders = rand(1, 5);
            for ($i = 0; $i < $orders; $i++) {
                $order = $user->orders()->create();
                $products = rand(1, 5);
                for ($j = 0; $j < $products; $j++) {
                    $order->products()->create(['name' => fake()->word()]);
                }
            }
        }
    }
}
