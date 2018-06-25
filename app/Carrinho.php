<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Produto;
use Session;


class Carrinho extends Model
{
    private $itens = array();

    public function __construct()
    {
        if(Session::has('cart')){
            $car = Session::get('cart');
            $this->itens = $car->itens;
        }
    }

    public function adiciona(Produto $p)
    {
        if(array_key_exists($p->id, $this->itens)) {
            $this->itens[$p->id]['qtd'] += 1;
        } else {
            $this->itens[$p->id] = [
                'item' => $p,
                'qtd' => 1
            ];
        }
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function getTotal()
    {
        $arrayPreco = array();
        foreach($this->itens as $i){
           $arrayPreco[] = $i['item']['preco'] * $i['qtd'];
        }
        $total = collect($arrayPreco)->sum();
        return $total;
    }

    public function remove(Produto $p)
    {
        if(array_key_exists($p->id, $this->itens)) {
            if($this->itens[$p->id]['qtd'] > 1) {
                $this->itens[$p->id]['qtd'] -= 1;
                Session::put('cart', $this);
            }else {
                unset($this->itens[$p->id]);
                Session::put('cart', $this);
            }

        }
    }

}
