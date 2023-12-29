<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Detalhes do Produto</title>
</head>
<body>

<div class="container mt-5">
    <h1>Detalhes do Produto</h1>
    <!-- Campos de exibição dos atributos do produto -->
    <div class="mb-3">
        <label class="form-label">Nome:</label>
        <p class="form-control-static">{{ $produto->nome }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Preço:</label>
        <p class="form-control-static">{{ $produto->preco }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Quantidade:</label>
        <p class="form-control-static">{{ $produto->quantidade }}</p>
    </div>
      <!-- Botão para voltar para a lista de produtos -->
    <a href="{{ route('produto.index') }}" class="btn btn-primary">Voltar para a Lista de Produtos</a>
</div>

</body>
</html>
