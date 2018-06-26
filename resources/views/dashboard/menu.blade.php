<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('dashboard')}}">Dashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown navbar-dark bg-dark">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produtos
          </a>
          <div class="dropdown-menu text-light bg-dark" style="border:0px;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-light" href="{{ route('dashboard.create')}}">Adicionar</a>
            <a class="dropdown-item text-light" href="#">Detalhes</a>
          </div>
        </li>
        <li class="nav-item dropdown navbar-dark bg-dark">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Card
          </a>
          <div class="dropdown-menu text-light bg-dark" style="border:0px;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-light" href="{{ route('card.create')}}">Adicionar</a>
            <a class="dropdown-item text-light" href="#">Detalhes</a>
          </div>
        </li>
      </ul>
  </div>
</nav>