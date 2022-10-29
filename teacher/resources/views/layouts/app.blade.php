<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <div class="relative h-32 w-32">
            <img src="{{ asset('images/logo.png')}}" alt="Logo Minilux" class="bsolute left-0 top-0 h-16 w-16 rounded shadow-md a">
          </div>
        
    </head>
    <body class="py-5 flex flex-col justify-between items-center min-h-screen">
        <main role="main">
            @yield('content')
        </main>
        
            @include('layouts/partials/_footer')
            
             
    </body>
</html>
