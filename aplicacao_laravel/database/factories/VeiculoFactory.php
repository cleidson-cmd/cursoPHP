<?php

namespace Database\Factories;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [//fake() gera dados falsos
            "nome" => fake()->word,
            "cor" => fake()->randomElement(["preto","branco","ciza","azul","verde"]),
            "fabricante" => fake()->Word,
            "preco" => fake()->numberBetween(18000,38000),
            "ano_fabricacao" => fake()->year(),
            "ano_modelo" => fake()->year(),
            "placa" => fake()->sentence(),
        ];

    }
}
