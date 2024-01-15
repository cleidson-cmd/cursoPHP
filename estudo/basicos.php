<?php
// O \ tem a função de scape ex: \\ estou dizendo para não interpretar o barra seguinte ignorando a funcionalidade que ele traria e apena exibindo
// outro exemplo ' ' aspa simples não ler variaveis dentro dela tratando direto com string 
// o que seria um problema em caso: 'ola {$variavelNome} "TUDO BEM?" ';
// NESSE CASO FICARIA "ola {$variavelnome} \"tudo bem\" "; onde o \ escaparia a " evitando que ela fechasse a aspas principal causando cnfusão

ini_set('display_erros', 0);
error_reporting(0);//para ocultar oos erros e não exibir para usuarios servindo de brecha para possiveis invasão
include "./funcoes.php";//importa até arquivo txt
//include_once "./funcoes.php"; iporta apenas uma vez em caso de usar o unclude mais de uma vez no mesmo arquivo
//ex: include_once include_once -> só uma vez e include include -> imorta 2 vezes duplicando
//constante deve ter o seu nome em maiusculo
define("MINHA_CONSTANT", 15);
$variavel = 15;
$variavel2 = $variavel++; //atribui depois incrementa
$variavel3 = ++$variavel2; //incremetta e ja atribui incrementado 
var_dump($variavel2);//mostra o valor e o tipo do valor ex: int(15)
var_dump($variavel2 == $variavel);
$nome = readline("qual seu nome: ");//independente do valor o readline retorna string
$nome = strtolower($nome);
$nome = strtoupper($nome);
$nome = mb_strtolower($nome);//fincuina com caracteres especiais ex: ç, ã, é
$idade = (int) readline("qual sua idade: ");//convertendo para int identifica até em texto o inteiro ex: "18 anos" ele consegue pegar o 18 e converter dentro do texto e se estiver vazia ele cconverte para 0 int
$idade2 = intval(readline("qual sua idade2: "));//outra forma de converter para int
$menssagem = ($idade > 18) ? "maior de 18" : (($idade == 18) ? "adolecente de 18" : "não atendeu as 2 condições e caiu aqui");

$pessoa = [
    'nome' => $nome,
    'idade' => $idade,
    'sexo' => 'M',
];
//cria se não existir o arquivo txt
$gravandoArquivoTXT = file_put_contents('texto.txt', serialize($pessoa));
$gravandoArquivoTXT = file_put_contents('texto.txt', json_encode($pessoa));
$lendoArquivoTXT = file_get_contents('texto.txt');

if(is_dir('nomePasta')){
 echo 'tem uma pasta/diretorio com esse nome';
}else{
 echo 'não tem uma pasta/diretorio com esse nome';
 mkdir('nomePasta');
 echo 'pasta criada com nome (nomePasta)';
}
print_r(unserialize($lendoArquivoTXT));
print_r(json_decode($lendoArquivoTXT, true));

$meuArray = [1,4,5,6];
$meuArray = [ 
    //posição => valor
    0 => 88,
    1 => 99
];
$meuArray[0] = 12;
array_push($meuArray, 99); //adciona o valor 99 mantendo a sequencia
$meuArray[] = 88; //adciona o valor 88 mantendo a sequencia
sort($meuArray);//ele ja ordena e atribui ordenado o array automaticamnte
$meuArrayVirouMap["nome"] = "cleidson";
$meuArrayVirouMap = [
    //chave => valor
    "nome" => "cleidson",
    "idade" => 18
];
array_rand($meuArray, 1);  //pegando 1 uma posição do array aleatório se inromar 2 ele pega 2 posições aleatorias
array_flip($meuArray);//inverte mudando valor para chave e chave para valor
array_reverse($meuArray);//retorna o array na ordem invertida obs: retorna esse valor e não altera no array peincipal a menos que atribua explicitamente 
$meuArray = range(0, 10, 2); //gerando array de 0 a 10 pulando de 2 em 2
var_dump(in_array('temEsseValor no Array', $meuArray));//verifica se o valor informado existe no array
//echo $meuArray; isso não funciona para array deve usar o print_r($meuArray);
print_r($meuArray);


switch($idade){
    case 1:
        echo "numero é 1";
        break; 

    case 2:
        echo "numero é 1";
        break;

    case 3://se não informar o break ele é indendido da mesma forma desse trechp
    case 4:
        echo "numero é 3 ou 4";
        break;

    default:
    echo "valor padrão";
    break;
};

$menssagem2 = match ($idade) {
   18  => "18 de maior mas joven rsrs",
   60  => "60 esta velo kkkk",
   default => "não é nem 18 e nem 60"
};

while ($contador < 5){
    echo $contador;//ele recebe até o 5 porem exibe 4 porque no 5 ele ja não entra aqui saindo do loop
    $contador++;
}
echo $contador;

do{
    echo $contador;
    $contador++;
}while($contador < 5);

for ($i = 0; $i< 5; $i++){
    echo $i;
}

for ($i = 10; $i > 0; $i--){
    echo $i;
}
//lista as variavel no foreach
foreach ($meuArray as $nome){
    echo $nome;
}

//ASPAS SIMPLES 'NÃO CONCATENA VARIAVEL AQUI E É MAIS PEFORMATICO JA QUE SEMPRE VAI TRATAR COMO TEXTO TUDO AQUI DENTRO'
//ASPAS DUPLA " FICA SEMPRE VERIFICANDO SE TEM VARIAVEL AQUI PARA CONCATENAR CONSOMEMAIS RECURSO DE PROCESSAMENTO "

echo MINHA_CONSTANT + $variavel;
echo 'nome' . ' - ' . empty($nome) ? " Não informado ": $nome . ' ; ';
echo 'idade' . ' - ' . $idade . PHP_EOL; //PHP_EOL End Off Line quebra linha  
echo 'idade2' . ' - ' . $idade2 . PHP_EOL;
echo 'menssagem' . ' - ' . $menssagem . PHP_EOL;
echo 'menssagem2' . ' - ' . $menssagem2 . PHP_EOL;
//substr('texto a ser trabalhado', indise inicio, indice final); ele vai pegar do texto apenas o intervalo entre os indices inicio e fim 
echo substr($nome, 0, 10);  

$alunos = 'cleidson, bruno, paulo, gabi';
$arrayAlunos = ['cleidson', 'bruno', 'paulo', 'gabriela'];
//separar e devolver um array => explode('separador', variavel com valores a serem separados)
print_r(explode(', ', $alunos));
//tras de array para string implode('como quero separar', array com valores a serem separados)
echo implode(' -> ', $arrayAlunos);

$arquivo = 'curriculo.pdf';
$aqrquivoSeparado = explode('.',$arquivo);
print_r("nome do arquivo é: {$aqrquivoSeparado[0]} e sua extenção é: {$aqrquivoSeparado[1]}" . PHP_EOL);

foreach($arrayAlunos as $aluno){
    if (strlen($aluno) < 6){
        echo substr($aluno, 0, 6) .'...' . PHP_EOL; 
    }else{
        echo $aluno . PHP_EOL;
    }
}

$frase = 'cleidson gosta muito de alguem';
//str_replace('o que vai substituir', 'substituto', onde vai haver a substituição);
$frase_modificada = str_replace('alguem', 'leleide 💖', $frase);

if (str_contains($frase, 'cleidson')){
    echo $frase_modificada . PHP_EOL;
}



imprimirOsDezPrimeiroNumerosIteinros(6);
imprimirOsDezPrimeiroNumerosIteinros(readline('informe um numero: '));
imprimirOsDezPrimeiroNumerosIteinros2(8);
imprimirOsDezPrimeiroNumerosIteinros2();



try{
    echo calcularAumento(2500);
}catch(Exception $e){
    echo $e->getMessage();
}

