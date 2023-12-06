<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestor - @yield('titulos')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{asset('css/basic_style.css')}}">
    </head>

    <body>
     @include('site.layouts._partials.topo')
    @yield('conteudo')

    </body>
</html>