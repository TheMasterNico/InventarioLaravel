<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

/* Firefox */
input[type=number] {
    -moz-appearance: textfield;
}
</style>

</head>

<body style="padding-top:  5%">
    <div class="container">
        <nav class="nav nav-tabs">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/">VENDER</a>
            <a class="nav-link {{ request()->routeIs('add') ? 'active' : '' }}" href="/agregar">AGREGAR</a>
            <!--<a class="nav-link {{ request()->routeIs('almacenar') ? 'active' : '' }}" href="/almacenar">ALMACENAR</a>-->
            <a class="nav-link {{ request()->routeIs('search') ? 'active' : '' }}" href="/buscar">BUSCAR</a>
            <a class="nav-link {{ request()->routeIs('registros') ? 'active' : '' }}" href="/registros">REGISTROS</a>
        </nav>
    </div> 
    @extends('plantilla_option')
    @yield('contenido')
    
    <script type="text/javascript">
        @yield('page-script')
    </script>
</body>
</html>