<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VeiculoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //por padrão vem sem a permissão para acessar
        //sendo necessario criar uma regra de autenticação ou deixa aberto
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "nome" => "required",
            "cor" => "required",
            "fabricante" => "required|min:5",
            "ano_fabricacao" => "required",
            "ano_modelo" => "required",
            "placa" => "required|unique:veiculos,placa",//essa validação deve informar o nome da tabela no banco e o compo ela no banco deve estar como unique tambem ex: unique:tabela,campo
            "preco" => "required",
        ];
    }

    //menssagem perssonalizada
    //ou pode pegar a tradução das menssagens do laravel para portugues
    //obs o nome deve ser messages
    public function messages(){
        return [
            "nome.required" => "required",
            "cor.required" => "nome é obrigatório",
            "fabricante.required" => "fabricante é obrigatório",
            "fabricante.min" => "fabricante deve ter 5 digitos no minimo",
            "ano_fabricacao.required" => "ano_fabricacao é obrigatório",
            "ano_modelo.required" => "ano_modelo é obrigatório",
            "placa.required" => "placa é obrigatório",
            "placa.unique" => "placa ja cadastrada e deve ser unica",
            "preco.required" => "preco é obrigatório",
        ];
    }
}
