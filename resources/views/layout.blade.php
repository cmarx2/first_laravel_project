<!DOCTYPE html>

<html>
    <head>
        <title>@yield('title', 'Laracasts')</title>
    </head>

    <body>
   

        <ul>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/">Home</a></li>
        </ul>

           @yield('content')
    </body>
</html>