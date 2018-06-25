<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Carrinho;
use Session;

class CarrinhoController extends Controller
{
    public function index()
    {
        $carrinho = new Carrinho();
        return view('ecommerce.carrinho.index')
                    ->with(['itens' => $carrinho->getItens(), 'total' => $carrinho->getTotal()]);
    }

    public function addCart($id)
    {
        $p = Produto::find($id);

        if($p == null){
            return redirect()->route('home');
        }

        $c = new Carrinho();
        $c->adiciona($p);
        Session::put('cart', $c);

        return redirect()->route('carrinho.index');
    }
}
