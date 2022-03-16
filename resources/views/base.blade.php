<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'contenu par defaut')</title>

       

    </head>
    <body>
      @yield('content')
        
       <footer>
           <p>&copy; Copyrights {{ date('Y') }} &middot; <a href="/about-us">About us</a></p>
       </footer>
    </body>
</html>
