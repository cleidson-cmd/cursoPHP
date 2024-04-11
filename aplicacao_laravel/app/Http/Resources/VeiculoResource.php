<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VeiculoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        JsonResource::withoutWrapping();// com isso ele remove a casca data que ele usa por padrãoex: data{ com meu json aqui}
        //montando apenas o que quero retornar como resposta para esse veiculo
        //formantando os dados
        return [
            "nome" => $this->nome,
            "cor" => $this->cor,
            "fabricante" => $this->fabricante,
            "preco" => "R$". number_format($this->preco, 2,",","."),
        ];
    }
}
