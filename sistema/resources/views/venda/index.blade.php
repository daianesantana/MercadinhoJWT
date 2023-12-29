<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lista de Vendas</title>
</head>
<body>

<div class="container mt-5">
        <h1>Lista de Vendas</h1>
    <!-- Verifica se há vendas para exibir -->
    @if(count($vendas) > 0)
          <!-- Loop para iterar sobre cada venda -->
        <ul class="list-group">
            @foreach($vendas as $venda)
                <li>{{ $venda->getVenda() }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhuma venda encontrada.</p>
    @endif
    <!-- Verifica se há um produto relacionado -->
    @if(isset($produto))
        <a href="{{ route('produtos.index', ['produto_id' => $produto->id]) }}">Voltar</a>
    @endif

</body>
</html>
