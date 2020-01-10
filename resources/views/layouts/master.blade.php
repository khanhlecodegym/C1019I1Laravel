<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel - @yield('title')</title>
        @include('partials.head')
    </head>
    <body>
        @include('partials.header')

        <div class="container">
            @yield('content')
        </div>

       @include('partials.js')
    </body>
</html>
