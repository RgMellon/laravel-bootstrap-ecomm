<form method="POST"  enctype="multipart/form-data" class="col-md-11 col-11" action="{{ route('produto.update') }}">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <input type="hidden" name="id" value=" {{ $p->id }}">
    <div class="form-group">
      <label for="nome"> Nome </label>
      <input type="text" name="nome" class="form-control" id="nome" 
        value=" {{ $p->nome }}">
    </div>

    <div class="form-group">
      <label for="preco"> </label>
      <input type="text" name="preco" class="form-control" id="preco"
      value=" {{ $p->preco }} ">
    </div>

    <div class="form-group">
      <label for="desc">Descrição</label>
      <textarea name="descricao" class="form-control" id="desc" rows="2">
        {{ $p->descricao }}
      </textarea>
    </div>

    <div class="form-group">
      <label for="exampleFormControlFile1">Selecione uma imagem</label>
      <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <button style="position:absolute; bottom:-84px" type="submit" class="btn btn-outline-dark">Atualizar</button>
  </form>