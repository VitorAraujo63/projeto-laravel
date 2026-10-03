<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container" style="max-width: 500px;">

        <div class="card">
            <div class="card-header bg-warning">
                <h2 style="margin: 0;">Editar Produto</h2>
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

            <form action="{{ route('produtos.update', $produto->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" value="{{ old('nome', $produto->nome) }}" required>
                </div>

                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" value="{{ old('preco', $produto->preco) }}" min="0" required>
                </div>

                <div class="d-flex" style="margin-top: 20px;">
                    <a href="{{ route('produtos.index') }}" class="btn btn-secondary"><- Voltar</a>
                    <button type="submit" class="btn btn-warning">Salvar alterações</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>