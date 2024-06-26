<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name_company" => "BP Services",
            "address" => "2715 Ash Dr. San Jose, South Dakota 83475",
            "email" => "example@gmail.com",
            "phone_number" => "(603) 555-0123",
            "logo" => "/img/logo.png"
        ];
    }
}
