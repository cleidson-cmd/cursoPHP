<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    //por padrão ele busca no banco de dados uma tabela com nome igual ao do model no plural
    //mas posso especificar o nome da tabela com comando a baixo
    //protected $table = "veiculos";
}
