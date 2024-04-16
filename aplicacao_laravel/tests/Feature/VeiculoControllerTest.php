<?php

namespace Tests\Feature;

use App\Models\Fabricante;
use App\Models\Veiculo;
use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class VeiculoControllerTest extends TestCase
{
    use RefreshDatabase; //isso limpar o banco toda vez que for executado
    //equivalente ao php artisan migrate:refresh
    public function test_deveria_retornar_ok_ao_listar_veiculos(): void
    {
        $response = $this->get('/index');

        $response->assertStatus(200);
    }

    public function test_deveria_retornar_lista_de_veiculos(): void
    {
        $veiculos = Veiculo::factory(3)->create();

        $response = $this->get('/index');

        $veiculosCollectionResposta = collect(json_decode($response->content()));
        dd(collect(json_decode($response->content())));
       // dd($veiculos);
     // dd($veiculosCollectionResposta);
        $veiculosCollectionResposta->each(function ($veiculo) use ($veiculos) {

            $this->assertTrue($veiculos->contains('nome', $veiculo->nome));
        });

        //$response->assertJsonCount(3);
    }

    public function test_deve_ser_possivel_cadastrar_um_veiculo():void
    {
        //cria um fabricante aleatório para usar a chave estranjeira no teste
        //evitando erro ja que o banco sempre esta sendo limpo ao iniciar o teste
        //$fabricante = Fabricante::factory()->create();

        $veiculo = Veiculo::factory()->make()->toArray();
      /*   $dado = [
        "nome" =>"sol",
        "cor" => "preto",
        "fabricante_id" => $fabricante->id,
        "ano_fabricacao" => 2021,
        "ano_modelo" => 2022,
        "placa" => "xpt882t",
        "preco" => 129000]; */

        //dd($veiculo);

        $response = $this->get('/store',$veiculo);

        $response->assertStatus(201)->assertJsonFragment($veiculo);
    }
}
