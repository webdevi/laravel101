<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <title>@yield('title', 'Laravel')</title> 
        <link rel="stylesheet" href="{{ mix('css/tailwind.css') }}" class="rel">
    </head>
    <body > 
        <div>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div> 
        <ul>
            <li><a href="/">welcome</a></li>
            <li><a href="/hello">hello</a></li>
            <li><a href="/contact">contact</a></li> 
            <li><a href="/projects">프로젝트</a></li> 
        </ul>
        <div class="bg-red-100">Hello</div>
        @yield('content' )
    </body>
</html>

