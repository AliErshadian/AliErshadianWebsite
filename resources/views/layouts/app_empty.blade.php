<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ali Ershadian - @yield('title')</title>
        @include('partials._stylesheets')
        @yield('stylesheets')

    </head>
    <body>
        @yield('content')
        @include('partials._scripts')
        @yield('scripts')
    </body>
</html>
