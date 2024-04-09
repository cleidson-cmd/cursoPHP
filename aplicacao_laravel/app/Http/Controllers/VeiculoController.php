<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{

    public function index()
    {
        $veiculos = Veiculo::all();
        return $veiculos;
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $veiculo = Veiculo::find($id);
        return $veiculo;
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
