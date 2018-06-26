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
            
            <div class="qtd-items d-flex justify-content-between" style="width:100px">
                <a href=" {{ route('carrinho.adicionar', $i['item']['id'] ) }} ">
                      <i class="fas fa-plus-circle" ></i>
                </a>
                <p> Qtd :  {{ $i['qtd'] }} </p>
                <a href="{{ route('carrinho.remover', $i['item']['id'] ) }}" >
                  <i class="fas fa-minus-circle" style="color:red"></i>
                </a>
            </div>
          </div>

          <div class="resumo d-flex flex-column justify-content-between">
            <div class="">
              <p> </p>
            </div>
              <div class="preco">
              <p> R$ {{ number_format($i['item']['preco'], 2) }} </p>
            </div>
          </div>
      </div>

      
    </div>
  </div>
@endforeach