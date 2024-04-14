<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    use HasFactory;

    public function veiculos(){
        //relacionando a varios veiculos
       return $this->hasMany(Veiculo::class);
    }
}
