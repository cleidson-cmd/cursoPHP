<?php

class Pessoa 
{
    //herança
    //polimorfismo
    //emcapisulamento privatizar para nem todo mundo ter acesso
    //abistração
    //private = só a classe acessa e ninguem mais
    //public = todos acessam
    //protected = só a classe pode acessar e as classes que herdam a classe com a propriedade protected
  public $corDosOlhos = 'verde';
  public $peso = 60;
  private $idade = 18;
  private $iddadeMaxima = 120;


public function __construct($parametro)
{
    echo 'Oba, nasci!' . $parametro;
}

public function __destruct()
{
    echo 'Oh não, morri.';
}

  public function envelhecer()
  {
    if ($this->idade + 1 <= $this->iddadeMaxima){
        $this->idade ++;
    }
  }

  public function obterIdade()
  {
     return $this->idade;
  }
}

$pessoa = new Pessoa('ola');

$pessoa2 = new Pessoa('ola2');
echo $pessoa2->obterIdade();
$pessoa2->envelhecer();
$pessoa2->corDosOlhos = "azul";
$pessoa2->peso = 50;


print_r($pessoa2);

echo $pessoa->corDosOlhos . PHP_EOL; //PHP_EOL End Off Line para pular linha 
echo $pessoa->peso . PHP_EOL;
echo $pessoa->obterIdade() . PHP_EOL;

