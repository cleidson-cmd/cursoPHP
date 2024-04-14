<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Veiculo extends Model
{
    use HasFactory;
    //campos que informo ao laravel que pode receber
    //e ja jodar direto no banco de dados
    protected $fillable = [
        "nome",
        "cor",
        "fabricante",
        "ano_fabricacao",
        "ano_modelo",
        "placa",
        "preco"
    ];
    //por padrão ele busca no banco de dados uma tabela com nome igual ao do model no plural
    //mas posso especificar o nome da tabela com comando a baixo
    //protected $table = "veiculos";

    //os metodos aqui são chamados automaticamentes quando esse arquivo é acessado
    public function GetNomeAttribute(){
        //pegando o atributo, tratando antes de retornar. nesse caso transformando em maiusculo
        return strtoupper($this->attributes['nome']);
    }

    public function fabricante(){
        //relacionando a um fabricante
       return $this->belongsTo(Fabricante::class);
    }


}
