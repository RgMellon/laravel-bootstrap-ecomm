<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'img', 'preco', 'descricao'];

    public function moveImg(Produto $p, $image)
    {
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        $image->move($destinationPath, $name);
        return $name;
    }
}
