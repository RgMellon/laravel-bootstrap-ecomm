@extends('layouts.app')

@section('content')
   <div class="row">
      <div class="d-none d-sm-block col-md-2">
        @include('ecommerce.aside')
      </div>
      <div class="col-sm col-md-10">
        @include('ecommerce.carousel')
        @include('ecommerce.card')
      </div>
  </div>
@endsection