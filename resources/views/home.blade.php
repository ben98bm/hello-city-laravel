<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello city</title>

       

    </head>
    <body>
       <h1>Hello from senegal</h1>
       
       <p>il est actuellement {{ date('h:i A') }}.</p>

       <footer>
           <p>&copy; Copyrights {{ date('Y') }} &middot; <a href="#">About us</a></p>
       </footer>
    </body>
</html>
