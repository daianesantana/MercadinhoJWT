<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastrar Produto</title>
</head>
<body>

<div class="container mt-5">
    <h1>Cadastrar Produto</h1>
    <!-- Formulário de cadastro de produto --> 
    <form action="{{ route('produto.store') }}" method="post">
        <!-- Token para proteção -->
        @csrf
         <!-- Campos de entrada -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="number" class="form-control" name="preco" required>
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade:</label>
            <input type="number" class="form-control" name="quantidade" required>
        </div>
        <!-- Botão de envio do formulário -->
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

</body>
</html>
