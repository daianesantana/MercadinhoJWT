User
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lista de Produtos</title>
</head>
<body>
    
    <div class="container mt-5">
        <h1>Lista de Produtos</h1>
         <!-- Verifica se há produtos para exibir -->
        @if(count($produtos) > 0)
            <ul class="list-group">
                <!-- Loop para iterar sobre cada produto -->
                @foreach($produtos as $produto)
                   <!-- Item da lista exibindo informações do produto -->
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Nome: {{ $produto->nome }}, Preço: {{ $produto->preco }}, Quantidade: {{ $produto->quantidade }}

                        <div class="btn-group" role="group">
                            <!-- Botões para visualizar detalhes do produto e realizar uma venda -->
                            <a class="btn btn-light" href="{{ route('produto.show', ['produtoId' => $produto->id]) }}">Detalhes</a>
                            <a href="{{ route('venda.create', ['produtoId' => $produto->id]) }}">Realizar Venda</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        <!-- Mensagem exibida quando nenhum produto é encontrado -->
        @else
            <p>Nenhum produto encontrado.</p>
        @endif
        <!-- Botão para redirecionar para a página de cadastro de produto -->
        <a class="btn btn-primary" href="{{ route('produto.create') }}">Cadastrar Produto</a>   
    </div>
    
</body>
</html>