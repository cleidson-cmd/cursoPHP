<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\pt_BR\Person;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fabricante>
 */
class FabricanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker =\Faker\Factory::create('pt_BR');
        $person = new Person($faker);

        return [
            "nome" => fake()->word,
            "cnpj" => $person->cpf()
        ];
    }
}
