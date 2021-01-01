<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
    <div class="container">
        @yield('content')
    </div> 
    @yield('footer') 
    </body>
</html>