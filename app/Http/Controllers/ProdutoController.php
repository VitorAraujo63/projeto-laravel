<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', compact('produtos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric',
        ]);

        Produto::create([  
            'nome' => $request->nome,
            'preco' => $request->preco,
        ]);

        return redirect()->route('produtos.index');
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos.editar', compact('produto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco' => 'required|numeric|min:0'
        ]);

        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->save();

        return redirect()->route('produtos.index')->with('sucesso', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->route('produtos.index')->with('sucesso', 'Produto excluído com sucesso!');
    }
}
