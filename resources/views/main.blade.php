<!DOCTYPE html>
<html lang="nl">
  <head>
    @include('partials._head')

    @yield('style')
    @yield('javascript')
  </head>
  <body>
    @include('partials._navbar')

    @yield('content')


    @include('partials._footer')

    @include('partials._javascript')
  </body>
</html>
