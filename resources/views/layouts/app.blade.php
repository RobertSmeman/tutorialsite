<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>admin</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="/css/sidebar_menu.css" rel="stylesheet">
    @yield('styles')
    <!-- Scripts -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->


                    <div class="menu">

  <!-- Menu icon -->

  <div class="icon-close"> <i class="fa fa-close"></i></div>

  <!-- Menu -->
  @if (Auth::guest())

  @else
<ul>
  <li>Hallo  {{ Auth::user()->name }} {{ Auth::user()->surname }}</li>
</ul>
      @endif
  <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li role="presentation"> <a href="{{ url('/cat') }}"> Maak een nieuwe categorie</a></li>
    <li><a href="{{ url('/register') }}">Registreren</a></li>
    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Uitloggen </a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
    </form>
    </li>
  </ul>
</div>
</div>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h3 class='logo'>Dhévak</h3>
                    </a>

                    <!-- Left Side Of Navbar -->

                    <div class=" icon-menu-1">


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())

                        @else
                        <li class="icon-menu"><i class="fa fa-bars" aria-hidden="true"></i></li>

                                </ul>

                        @endif
                        </div>


        </nav>
  </div>
        @yield('content')



    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/sidebar_menu.js"></script>
    <script src="/js/addInput.js" language="Javascript" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    @yield('tabbing')
</body>
</html>
