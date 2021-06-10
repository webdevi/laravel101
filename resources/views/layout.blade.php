<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>@yield('title', 'Laravel')</title> 
    </head>
    <body > 
        <div>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div> 
        <ul>
            <li><a href="/">welcome</a></li>
            <li><a href="/hello">hello</a></li>
            <li><a href="/contact">contact</a></li> 
        </ul>
        @yield('content' )
    </body>
</html>

