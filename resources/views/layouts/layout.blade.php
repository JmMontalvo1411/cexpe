<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li class="{{ setActive('/') }}"><a href="{{ url('/') }}">INICIO</a></li>
            <li class="{{ setActive('programas') }}"><a href="{{ url('/programas') }}">PROGRAMAS</a></li>
            <li class="{{ setActive('talleres*') }}"><a href="{{ url('/talleres') }}">TALLERES</a></li>
            <li class="{{ setActive('asesoramiento') }}"><a href="{{ url('/asesoramiento') }}">ASESORAMIENTO</a></li>
            <li class="{{ setActive('contacto') }}"><a href="{{ url('/contacto') }}">CONTACTO</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
