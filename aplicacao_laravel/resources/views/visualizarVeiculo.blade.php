<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha primeira aplicação com laravel</title>
</head>

<body>
    <div class="container">

        <dvi class="row">
            <div class="col-12">
                <h1>Bem vindo ao meu site😊</h1>
                <h2>Detalhe do veiculo</h2>
                <ul class="list-group">
                    <li class="list-group-item">Nome: {{ $veiculo->nome }}</li>
                    <li class="list-group-item">Valor: {{ $veiculo->valor }}</li>
                    <li class="list-group-item">cadastrado: {{ $veiculo->created_at }}</li>

                </ul>
            </div>

        </dvi>
    </div>


</body>

</html>
