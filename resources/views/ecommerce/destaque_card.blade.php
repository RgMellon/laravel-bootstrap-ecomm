<div class="d-flex flex-wrap">
@for($i = 0; $i < 4; $i++)
  <div class="col-md-3" style="margin-top:2rem;">
    <div class="card text-white" style="background:#304167 !important">
      <img class="card-img" src="{{ asset('img/scorpion.png')}}" alt="Card image" style="opacity: 0.1;">
      <div class="card-img-overlay">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text">Last updated 3 mins ago</p>
      </div>
    </div>
  </div>
@endfor
</div>
