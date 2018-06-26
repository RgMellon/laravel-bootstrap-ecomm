@extends('layouts.app')

@section('content')
@include('ecommerce.breadcrumb', ['caminho' => [
  ['Home', 'home'],
  ['Carrinho', ''],
]])
  @include('ecommerce.carrinho.items')
  @include('ecommerce.carrinho.resultado')
@endsection

