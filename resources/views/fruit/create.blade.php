@if (isset($fruit) && is_object($fruit))
    <h1>Edit Fruit</h1>
    <p>{{ var_dump($fruit) }}</p>
@else
    <h1>Create Fruit</h1>
@endif

<form action="{{ isset($fruit) ? route('fruits.update') : route('fruits.save') }}" method="POST">

    @csrf

    <input type="hidden" name="id" value="{{ $fruit->id }}">

    <label for="name">Nombre</label>
    <br>
    <input type="text" name="nombre" id="nombre" value="{{ isset($fruit) ? $fruit->nombre : '' }}">

    <br>
    <br>

    <label for="description">Descripción</label>
    <br>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10"
        value="{{ isset($fruit) ? $fruit->descripcion : '' }}"></textarea>

    <br>
    <br>

    <label for="price">Precio</label>
    <br>
    <input type="number" name="precio" id="precio" value="{{ isset($fruit) ? $fruit->precio : 0 }}">

    <br>
    <br>

    <input type="submit" value="Enviar">

</form>
