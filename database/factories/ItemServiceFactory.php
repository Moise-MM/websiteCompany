<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemService>
 */
class ItemServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "service_id" => 1,
            "name" => "exemple service",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur magnam eum sit accusamus culpa voluptate."
        ];
    }
}
