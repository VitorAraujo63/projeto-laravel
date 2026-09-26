<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra Produto</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container" style="max-width: 500px;">
        <div class="card">
            <div class="card-header">
                <h2 style="margin: 0;">+ Cadastrar Produto</h2>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('produtos.create') }}">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{ old('nome') }}" placeholder="Ex: Cadeira" required>
                </div>

                <div class="form-group">
                    <label for="preco">Preço (R$)</label>
                    <input type="number" name="preco" id="preco" value="{{ old('preco') }}" placeholder="Ex: 299.90" required>
                </div>

                <div class="d-flex" style="margin-top: 20px;">
                    <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>