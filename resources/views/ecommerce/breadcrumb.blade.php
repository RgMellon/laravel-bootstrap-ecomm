<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      @foreach($caminho as $key => $c)
        @if ( $key == count($caminho) - 1 )
        <li class="breadcrumb-item active" aria-current="page">
          {{ $c[0] }}
        </li>
        @else
          <li class="breadcrumb-item">
            <a href="{{ route($c[1])}}">
              {{ $c[0] }}
            </a>
          </li>
        @endif
      @endforeach
    </ol>
  </nav>

  {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li> --}}