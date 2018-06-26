<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'img', 'preco', 'descricao'];

    public function moveImg($image)
    {   
        
        $name = time().'.'.$image->getClientOriginalExtension();
        \Image::make($image)->resize(450, 450)->save(public_path('img/').$name, 100);
        return $name;
    }
}
