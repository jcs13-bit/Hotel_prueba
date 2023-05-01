<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Hotel</h1>
            </div>
            <div class="col">
                <a href="{{ route('cliente.home') }}" class="btn btn-primary">Inicio</a>
            </div>
        </div>
        <div class="container">
            @yield('contenido')
        </div>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>