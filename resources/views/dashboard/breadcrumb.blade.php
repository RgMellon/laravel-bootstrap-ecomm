<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route("$rotaCaminho") }}"> {{ $caminho }}</a>
      </li>
      @if(isset($atual))
        <li class="breadcrumb-item active" aria-current="page">
          {{ $atual }}
        </li>
      @endif
    </ol>
  </nav>