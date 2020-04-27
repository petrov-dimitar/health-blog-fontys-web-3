<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('toolbar')
            This is the master toolbar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>