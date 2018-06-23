@extends('layouts.dash_layout')

@section('menu')
  @include('dashboard.menu')
@endsection

@section('breadcrumb')
  @include('dashboard.breadcrumb',
  ['caminho' => 'Dashboard', 'rotaCaminho' => 'dashboard'])
@endsection

@section('content')
  @include('dashboard.box', ['titulo' => 80, 'sub' => 'Produtos'])
  @include('dashboard.box', ['titulo' => 50, 'sub' => 'Estoque'])
  @include('dashboard.box', ['titulo' => 10, 'sub' => 'Clicados'])
  @include('dashboard.table', $produtos);
@endsection




