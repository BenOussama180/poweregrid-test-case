<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // create projects
            'project_name' => $this->faker->word,
            'customer_id' => 1,
        ];
    }



    public function projectable()
    {
        return $this->faker->randomElement([
            Order::class
        ]);
    }
}
