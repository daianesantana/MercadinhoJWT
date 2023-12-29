<!-- Dentro da sua view 'venda.detalhes' -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Venda</title>
</head>
<body>
    <h1>Detalhes da Venda</h1>
    <!-- Exibição de informações sobre a venda -->
    <p>Produto: {{ $produto->nome }}</p>
    <p>Preço: {{ $produto->preco }}</p>
    <p>Quantidade: {{ $venda->qtdVenda }}</p>
    <p>Desconto: {{ $venda->desconto }}</p>
    <p>Estoque: {{$produto->quantidade}}</p>
    
    <!-- Link para voltar à lista de vendas -->
    <a href="{{ route('vendas.index', ['vendaId' => $venda->id]) }}">Voltar</a>
</body>
</html>
