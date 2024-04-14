<?php

namespace Database\Factories;

use App\Models\Fabricante;
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
            "fabricante_id" => Fabricante::factory()->create()->id,//cria e pega automatico um id forein key da tabema fabricante
            "preco" => fake()->numberBetween(18000,38000),
            "ano_fabricacao" => fake()->year(),
            "ano_modelo" => fake()->year(),
            "placa" => fake()->sentence(),
        ];

    }
}
