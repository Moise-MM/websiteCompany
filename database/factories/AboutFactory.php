<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => "A propos de nous",
            'subtitle' => "Connaitre notre entreprise",
            'description' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, 
                        quo accusantium veniam quas saepe minima? Sit vero repellat corporis cupiditate. Lorem, 
                        ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, quo accusantium veniam quas 
                        saepe minima? Sit vero repellat corporis cupiditate. Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Voluptatum, quo accusantium veniam quas saepe minima? Sit vero repellat corporis cupiditate.",
        ];
    }
}
