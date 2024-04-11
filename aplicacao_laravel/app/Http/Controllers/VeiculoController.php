<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use GuzzleHttp\Psr7\Response;
use App\Http\Requests\VeiculoStoreRequest;
use App\Http\Resources\VeiculoResource;
class VeiculoController extends Controller
{

    public function index()
    {
        //paginação
        $veiculos = Veiculo::paginate(10);
        //$veiculos = Veiculo::all();
        return $veiculos;
    }


    public function store(VeiculoStoreRequest $request)
    {
        // essa primeira linha resume toas a baixo
        return Veiculo::create($request->all());
       // $requestRequisicao = $request->only("nome", "preco");
       /*  $requestRequisicao = $request->all();

        $veiculo = new Veiculo();

        $veiculo->nome = $requestRequisicao["nome"];
        $veiculo->cor = $requestRequisicao["cor"];
        $veiculo->fabricante = $requestRequisicao["fabricante"];
        $veiculo->preco = $requestRequisicao["preco"];
        $veiculo->ano_fabricacao = $requestRequisicao["ano_fabricacao"];
        $veiculo->ano_modelo = $requestRequisicao["ano_modelo"];
        $veiculo->placa = $requestRequisicao["placa"];
        $veiculo->save();
        return response($veiculo, 201); */
    }


    public function show($id)
    {
        $veiculo = Veiculo::find($id);
        //return $veiculo;
//criando um retono dde veiculo com modelo feito em VeiculoResource
        return VeiculoResource::make($veiculo);
    }


    public function update(Request $request, $id)
    {
        //return Veiculo::find($id)->update($request->all()); retorna 1 treu 0 false
        $veiculo = Veiculo::find($id);
        $veiculo->update($request->all());
        return $veiculo;
    }


    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        if (!$veiculo) {
            response('falha', 404);
        } else {
            $veiculo->delete();
        }
    }
}
