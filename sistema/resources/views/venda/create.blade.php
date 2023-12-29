<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Registrar Venda</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Registrar Venda</h1>
        <!-- Formulário para registrar a venda -->
        <form action="{{ route('venda.store', ['produtoId' => $produto->id]) }}" method="post">
            @csrf
             <!-- Campos de entrada-->
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade:</label>
                <input type="number" class="form-control" name="quantidade" required>
            </div>
            <div class="mb-3">
                <label for="desconto" class="form-label">Desconto:</label>
                <input type="number" class="form-control" name="desconto">
            </div>
             <!-- Botão para enviar o formulário e registrar a venda -->
            <button type="submit" class="btn btn-primary">Registrar Venda</button>
        </form>
    </div>

</body>
</html>
