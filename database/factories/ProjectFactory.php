<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => "Nos projets déjà réalisés",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Repellat ipsam similique assumenda dignissimos! Minus, odio."
        ];
    }
}
