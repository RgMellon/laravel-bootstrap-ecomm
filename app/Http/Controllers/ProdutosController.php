<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'img' => 'required|mimes:jpeg,jpg,png|max:1000',
            'preco' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'descricao' => 'required'
        ]);

        $image = $request->file('img');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $name);

        Produto::create([
            'nome' => $request->input('nome'),
            'preco' => $request->input('preco'),
            'descricao' => $request->input('descricao'),
            'img' => $name,
        ]);

        return redirect()->route('dashboard');
    }

    public function delete(Request $request){
        $p = Produto::find($request->id);
        $p->delete();
        return redirect()->back();
    }

    public function update(Request $request, Produto $produto)
    {
        $p = Produto::find($request->id);
        $img = $request->file('img');

        if($img !== null){
            $name = $produto->moveImg($produto, $img);
            $p->update([
                'nome' => $request->input('nome'),
                'preco' => $request->input('preco'),
                'descricao' => $request->input('descricao'),
                'img' => $name,
            ]);
        } else {
            $p->update($request->all());
        }

        return redirect()->back();
    }
}
