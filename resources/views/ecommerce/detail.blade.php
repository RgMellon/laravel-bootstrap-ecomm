@extends('layouts.app')

@section('content')
  @include('ecommerce.breadcrumb', ['caminho' => [
      ['Home', 'home'],
      ['Detalhe', 'produto.detalhe'],
  ]])

  <div class="row">
    <div class="col col-md-6 d-flex justify-content-center">
      <div class="area-img d-flex justify-content-center" style="height:500px">
        <img class="img-fluid" src="{{ asset('img/'.$produto->img)}}" alt="">
      </div>
    </div>
    <div class="col col-md-6 bg-light">
      <div class="titulo">
        <h1> {{ $produto->nome }}</h1>
      </div>
      <div class="preco text-success" style="margin-top:1rem">
        R$ {{ number_format($produto->preco, 2)}}
      </div>
      <div class="descricao" style="margin-top:1rem">
          <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
      </div>
      <div class="acoes d-flex justify-content-around" style="margin-top:2rem">
        <a class="btn btn-outline-info" href=" {{ route('carrinho.adicionar', $produto->id)}}"> Adicionar carrinho </a>
        <a href="{{ route('home') }}" class="btn btn-outline-secondary">Continuar comprando </a>
      </div>
    </div>
  </div>
@endsection