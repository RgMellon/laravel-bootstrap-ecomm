<form method="POST"  enctype="multipart/form-data" class="col-md-11 col-11" action="{{ route('produto.store') }}">
    @csrf
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" class="form-control" id="nome" value="{{ old('nome')}}" placeholder="Nome produto...">
    </div>

    <div class="form-group">
      <label for="preco">Preço</label>
      <input type="text" name="preco" class="form-control" id="preco" value="{{ old('preco')}}" placeholder="R$">
    </div>

    <div class="form-group">
      <label for="desc">Descrição</label>
      <textarea name="descricao" class="form-control" id="desc" rows="2">
        {{ old('descricao') }}
      </textarea>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlFile1">Selecione uma imagem</label>
      <input value="{{ old('img')}}" type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>

    <button type="submit" class="btn btn-outline-dark">Salvar</button>
  </form>