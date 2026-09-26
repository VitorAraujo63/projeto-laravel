<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Produto</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="{{ route('produtos.create') }}" method="post">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="preco">Preco:</label>
        <input type="number" name="preco" id="preco" required>
        <button type="submit">Cadastrar</button>
</form>
</body>
</html>