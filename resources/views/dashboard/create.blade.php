@extends('layouts.dash_layout')

@section('breadcrumb')
  @include('dashboard.breadcrumb',
  ['caminho' => 'Dashboard', 'rotaCaminho' => 'dashboard',
   'atual' => 'Produtos', 'rotaAtual' => 'dashboard.create'])
@endsection

@section('content')
  @include('dashboard.form_prod')
@endsection