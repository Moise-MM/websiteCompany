<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => "Nos Services",
            "description" => "Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet 
                        eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut"
        ];
    }
}
