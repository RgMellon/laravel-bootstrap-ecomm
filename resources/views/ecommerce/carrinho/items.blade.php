@foreach($itens as $i)
  <div class="d-flex justify-content-end">
    <div class="shadow-lg p-3 mb-5 bg-white rounded d-flex col-11">

      <div class="wrapper-img" style="width:50px">
          <img class="img-item-lista rounded-circle shadow-lg p-3 mb-5 bg-white rounded" style="width:60px;"
            src="{{ asset("img/". $i['item']['img']."" )}}" alt="">
      </div>

      <div class="info d-flex w-100" style="justify-content:space-between">

          <div class="info-titulo align-self-center">
            <h1 style="font-size: 1.1rem;">  {{ $i['item']['nome']}} </h1>
            <p style="color:grey"> {{ $i['item']['descricao']}}</p>
          </div>

          <div class="resumo d-flex flex-column justify-content-between">
            <div class="">
              <p> Qtd :  {{ $i['qtd'] }} </p>
            </div>
              <div class="preco">
              <p> R$ {{ number_format($i['item']['preco'], 2) }} </p>
            </div>
          </div>
      </div>

      <div class="acoes d-flex flex-column justify-content-between">
      <a href=" {{ route('carrinho.adicionar', $i['item']['id'] ) }} " id="plus">
            <i class="fas fa-plus-circle" ></i>
        </a>

        <a href="{{ route('carrinho.remover', $i['item']['id'] ) }}" id="delete">
          <i class="fas fa-minus-circle"></i>
        </a>

      </div>
    </div>
  </div>
@endforeach