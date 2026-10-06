<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    
<div class="container">
    <div class="header-flex">
        <a href="{{ route('produtos.create') }}" class="btn btn-primary">
         + Novo produto
        </a>
    </div>

    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif

    @if (count($produtos) === 0)
        <div class="alert alert-info">Nenhum produto cadastrado ainda.</div>
    @else
        <div class="card" style="padding: 0;">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th class="text-end">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td class="text-muted">{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                            <td class="text-end">
                                <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('produtos.destroy', $produto->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Tem certeza que deseja excluir o produto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>

</body>
</html>