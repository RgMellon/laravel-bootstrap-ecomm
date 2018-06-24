<div class="table-responsive">
  <table class="table" style="margin-top:4rem">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imagem</th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Descrição</th>
        <th scope="col" class="d-flex justify-content-center">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach($produtos as $p)
        <tr>
          <th scope="row"> {{ $p->id }} </th>
          <td> <img style="width:50px;" src="{{ asset("img/{$p->img}")}}"> </td>
          <td> {{ $p->nome}} </td>
          <td> {{ $p->preco}} </td>
          <td> {{ $p->descricao }} </td>
          <td class="d-flex justify-content-around">
            @include('dashboard.modal')
            <form action="{{ route('produto.delete') }}" method="POST">
              @csrf
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="id" value="{{$p->id}}">
              <button type="submit" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </button>
            </form>
          </td>
        </tr>
      @endforeach
</table>
</div>