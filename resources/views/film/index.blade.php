<h1>{{ $title }}</h1>
<p>(acción index del controlador FilmController</p>


@if (isset($page))
    <h3>Número de página: {{ $page }}</h3>
@endif


<br>
<br>

<a href="{{ route('films.details') }}">Ir a detalles</a>
