<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layout._head')
    </head>
    <body>
        <header>
            @include('layout._header')
        </header>

        <section>
            <div class='container'>
                @yield('content')
            </div>
        </section>

        <footer class='text-center'>
            Rogerio Eduardo Pereira - 16th October 2018
        </footer>
    </body>
</html>
