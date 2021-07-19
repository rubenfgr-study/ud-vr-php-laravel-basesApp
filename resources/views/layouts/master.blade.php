<!DOCTYPE html>
<html lang='es'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Master - @yield('title')</title>
</head>

<body>

    @section('header')
        <h1>CABECERA DE LA WEB (master)</h1>
        <hr>
    @show

    <hr>

    <div class="container">
        @yield('content')
    </div>

    <hr>

    @section('footer')
        <hr>
        <h1>FOOTER DE LA WEB (master)</h1>
    @show


</body>

</html>
