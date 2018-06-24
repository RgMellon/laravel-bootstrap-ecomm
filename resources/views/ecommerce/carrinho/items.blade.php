@for($i = 0; $i < 5; $i++)
<div class="d-flex justify-content-end">
<div class="shadow-lg p-3 mb-5 bg-white rounded d-flex col-11">

  <div class="wrapper-img" style="width:50px">
      <img class="img-item-lista rounded-circle shadow-lg p-3 mb-5 bg-white rounded" style="width:60px;" src="{{ asset('img/1529792484.jpeg')}}" alt="">
  </div>
  
  <div class="info d-flex w-100" style="justify-content:space-between">

      <div class="info-titulo align-self-center">
        <h1 style="font-size: 1.1rem;"> Saddnes divertidamente </h1>
        <p style="color:grey"> Funko saddnes do filme divertidamente </p>
      </div>

      <div class="preco">
        <p> R$ 900 </p>
      </div>

  </div>

</div>
</div>
@endfor