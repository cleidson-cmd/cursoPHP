<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use GuzzleHttp\Psr7\Response;
use App\Http\Requests\VeiculoStoreRequest;
use App\Http\Resources\VeiculoResource;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use stdClass;

class VeiculoController extends Controller
{

    public function index()
    {
        //paginação
        //$veiculos = Veiculo::paginate(10);
        //$veiculos = Veiculo::all();
        //return $veiculos;
        //colection permite pegar uma coleção de objetos. nesse caso a coleção é formatada como defini no DTO VeiculoResource
        return VeiculoResource::collection(Veiculo::paginate(10));
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



    public function aprendendoCollection()
    {
        $lista = [
            ["nome" => "cleidson", "idade" => 18],
            ["nome" => "gabriel", "idade" => 8],
            ["nome" => "alex", "idade" => 15],
            ["nome" => "bruno", "idade" => 20],
        ];
        //filtrar lista
        $lista = array_filter($lista, function ($item) {
            //retorna um buleano true adciona; false não adciona
            return $item["idade"] > 15;
        });
        //return $lista->sortBy("idade");ordena   por uma chave
        //return $lista->pluck("nome");retorna apenas os valores da chave nome
        return $lista;
    }

    public function municipios(Request $request)
    {
      //$request->segment(2);//pega a url posição ex: dominio/pagina/paginafinal é interpretado como 1/2/3 nesse ex pegaria apenas /pagina/ que é o 2
      $estado = "BA";
      $resposta = Http::get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$estado}/distritos");
      if($resposta->status() == 200){
        dd($resposta);
      }else{
         dd("algo deu errado statuscode: {$resposta->status()}");
      }

      $municipiosColections = collect(json_decode($resposta->body()));
                                                    //trasendo uma variavel de fora do escopo para dentro da funcção
      $municipiosColections->filter(function($item) use ($resposta){
        return $item->nome == $resposta;
      });

    }

    public function cadastrarCliente(Request $request)
    {
        //tarabalhando com cache "pasta: config/cache.php" configurações: .env "CACHE_DRIVER": tipo do arquivo do cache
        //caminho fisico do cache/storage/framework/cache/data/numerações de pastas com os arquivos
        //inserindo uma chave e um valor no cache
        //Cache::put("teste", "valor testando");
        //inserindo chave, valor e 60 segundos para excluir automaticamente do cache
        //Cache::put("teste", "valor testando", 60);
        //verificando se existe uma chave com nome "teste" no cache
        //Cache::has("teste");
        //pegando dados da chave "teste" no cache
        //Cache::get("teste");
        //limpando tudo que tiver no cache
        //Cache::flush();
        //apaga uma chave especifica do cache
        //Cache::forget('key');

        $cliente = new \stdClass(); //stdClass() é uma classe generica que permite dizer quais campos quero que ela tenho aqui direto na atribuição do valor

        $cliente->nome = $request->get('nome');
        $cliente->idade = $request->get('idade');
        $cliente->cep = $request->get('cep');

        if (!Cache::has("cep_{$cliente->cep}")){
            $endereco = Http::get("https://viacep.com.br/ws/{$cliente->cep}/json/");
            $cliente->endereco = json_decode($endereco->body());
            $cliente->cache = "via api";
            Cache::put("cep_{$cliente->cep}", $cliente->endereco, 60);
        }else{
            $cliente->endereco = Cache::get("cep_{$cliente->cep}");
            $cliente->cache = "via cache";
        }
        return $cliente;
    }



}
