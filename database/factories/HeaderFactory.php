<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Header>
 */
class HeaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => "Bienvenue chez BP Services Paris",
            "description" => "Nous réalisons differents types de travaux de rénovations. Dans les lieux d'habitations, 
                            les locaux ainsi que les jardins, terrasses et balcons. Notre société saura vous accompagner 
                            tout au long de vos projets de rénovations."
        ];
    }
}
