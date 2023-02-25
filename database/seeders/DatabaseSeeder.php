<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // create orders & projects
        \App\Models\Order::factory(10)->create();
        \App\Models\Project::factory(10)->create();
        // link btwn them
        $orders = \App\Models\Order::all();
        $projects = \App\Models\Project::all();
        foreach ($orders as $order) {
            $order->projects()->attach($projects->random());
        }
    }
}
