<h1>Fruit Detail</h1>

@if (!is_null($fruit) && !empty($fruit))
    {{ $fruit }}

    <h1>{{ $fruit->nombre }}</h1>
    <p>{{ $fruit->descripcion }}</p>

    <br>
    <br>

    <a href="{{ route('fruits.delete', ['id' => $fruit->id]) }}">Eliminar</a>
    <br>
    <br>
    <a href="{{ route('fruits.edit', ['id' => $fruit->id]) }}">Actualizar</a>

@endif
