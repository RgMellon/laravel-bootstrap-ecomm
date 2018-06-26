
<div class="card-columns" style="margin-top:2rem">
@foreach($produtos as $p)
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/'."$p->img") }}" alt="Card image cap">
    <div class="card-body">
      <div class="d-flex justify-content-between">
      <h5 class="card-title"> {{ $p->nome }}</h5>
       <p class="text-success">  R$ {{ number_format($p->preco, 2) }}  </p>
      </div>
      <hr>

      <p class="card-text">
         {{ $p->descricao }}
      </p>
      <hr>
      <a href="{{ route('produto.detalhe', $p->id) }}" class="card-link">
          Detalhes
      </a>
      <a href="{{ route('carrinho.adicionar', $p->id) }}" class="card-link">
        <i class="fas fa-cart-plus"></i>
        Adicionar ao carrinho
      </a>
    </div>
    
  </div>
@endforeach
</div>
