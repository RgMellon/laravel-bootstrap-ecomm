<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <script src="{{ asset('js/app.js') }}" defer></script>
  <title>DashBoard</title>
</head>
<body>
  <div class="menu">
    @include('dashboard.menu')
  </div>
  <main role="main" class="col-md-10 container" style="margin-top:6rem;">
    @yield('breadcrumb')
    <!--Mostra os erros na tela -->
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Resumo</h1>
    </div>
    <div class="flex-wrap justify-content-center row" style="display:flex" >
        @yield('content')
    </div>
  </main>
</body>
</html>