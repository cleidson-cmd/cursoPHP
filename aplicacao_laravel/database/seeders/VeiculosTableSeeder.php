<?php

namespace Database\Seeders;

use App\Models\Fabricante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Veiculo;

class VeiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Fabricante::factory(20)->create();

        Veiculo::factory(20)->create();
    }
}
