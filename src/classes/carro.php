<?php
namespace Cleidson\CursoApiComPhp\classes;
class Carro extends Veiculo {

   public function __construct(string $cor)
   {
    {
        $quantidadeRodas = 4;
        $velocidadeMaxima = 180;

        parent:: __construct($quantidadeRodas, $cor, $velocidadeMaxima);
      
    }       
   }
   
}