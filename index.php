<?php
$nomeRecebido = $_GET['nome'] ?? ''; //http://localhost:8080/CursoAPIComPHP/?nome=veinho obs: esse tipo de entrada executa JS, imagens, links, etc..caso não seja tratado
//echo @$_GET['nome']; o @ no inicio suprime os erros ex: se der erro ele ignora ao inves de exibir
//header("Location: https://www.google.com.br");//redirecionamento 
$nomes = ['bruno', 'fernando', 'maria', 'fabio', 'bruna'];
//$renderizacao = '<li class="list-group-item">' . implode('</li><li class="list-group-item">', $nomes) . '</li>';
if ($nomeRecebido == 'cleidson') {
    header("Location: https://www.google.com.br");
}

$nomeSite = "Cleidson.com";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Curso PHP</title>
</head>

<body>
    <h1 class="mt-4 mb-4">bem vindos ao site <? echo $nomeSite ?></h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <?php foreach ($nomes as $nome) : ?>
                        <li class="list-group-item">
                            <?php echo $nome ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</body>

</html>