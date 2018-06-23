
<div class="card-columns" style="margin-top:2rem">
@for($i = 0; $i < 10; $i++)
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/funkos/card/funk_dead.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <hr>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
    
  </div>
@endfor
</div>
