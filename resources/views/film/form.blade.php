<h1>Formulario</h1>

<form action="{{ route('films.receive') }}" method="POST">

    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="email">Correo</label>
    <input type="text" name="email">

    <input type="submit" value="Enviar">
</form>
