<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;


class HelloController extends Controller
{
    public function hello($nome)
    {
       //$nome = "cleidson";
       $veiculos = ["Gol","Corsa","Civic","Corola"];

       return view("hello", Compact("nome", "veiculos"));
    }

    public function visualizarVeiculo($id)
    {
       $veiculo = Veiculo::find($id);

       return view("visualizarVeiculo", Compact("veiculo"));
    }


    public function listarVeiculos()
    {
       $nome = "Cleidson";
       $veiculos = Veiculo::all();
       //dd($veiculos);//esse dd() mostra direto na tela

       return view("listagem", Compact("nome", "veiculos"));
    }


    public function criacao($nome, $valor)
    {
       $veiculo = new Veiculo();

       $veiculo->nome = $nome;
       $veiculo->valor = $valor;
       $veiculo->save();

       return  "Veiculo cadastrado com sucesso!";
    }


    public function atualizacao($id, $nome, $valor)
    {
       $veiculo = Veiculo::find($id);

       $veiculo->nome = $nome;
       $veiculo->valor = $valor;
       $veiculo->save();

       return  "Veiculo atualizado com sucesso!";
    }
}
