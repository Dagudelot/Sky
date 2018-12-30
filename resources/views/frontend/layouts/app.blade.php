<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sky') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
   
   <!--Header-->
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light bg-white fixed-top alert-home">
        <a href="{{ route('main') }}" class="navbar-brand">
           <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-block align-top">
           Sky
        </a>

        <!-- Button for mobile devices only -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBS" aria-controls="navbarBS" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- /Button for mobile devices only -->

        <div class="collapse navbar-collapse" id="navbarBS">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Características</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Más información
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown06">
                <a class="dropdown-item" href="{{ route('security') }}">Seguridad</a>
                <a class="dropdown-item" href="#">Clientes</a>
                <a class="dropdown-item" href="#">Preguntas frecuentes</a>
              </div>
            </li>

            @auth

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="#!" id="dropdown06" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdown06">
                
                <a class="dropdown-item text-center" href="{{ route('logout') }}" 
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout <i class="fas fa-sign-out-alt"></i>
                </a>


                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>

              </div>
            </li>

            @else

            <li class="nav-item">
               <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
               <a href="{{ route('register') }}" class="btn btn-outline-primary ml-2">Signup</a>
            </li>

            @endauth

          </ul>
        </div>
      </nav>
   </header>
   <!--/Header-->
   
  @yield('content')
   
   <!--Footer-->
   <footer class="container py-5">
      <div class="row show-grid">

         <div class="col-6 col-md-6 col-lg-3 text-center">
            <img src="{{ asset('img/logo.png') }}" width="100">
            <small class="d-block mb-3 text-muted">Sky</small>
         </div>
         
         <div class="col-6 col-md-6 col-lg-3">
            <h5>Sky Files</h5>
            <p class="text-small text-muted">Pays and storage on our platform are completely safe. Files will always be available 24/7</p>
         </div>

         <div class="col-6 col-md-6 col-lg-3 text-center">
            <h5>More info</h5>
            <ul class="list-unstyled text-small">
               <li><a href="#" class="text-muted">Youtube</a></li>
               <li><a href="#" class="text-muted">GitHub</a></li>
               <li><a href="#" class="text-muted">Twitter</a></li>
               <li><a href="#" class="text-muted">Facebook</a></li>
            </ul>
         </div>
         
         <div class="col-6 col-md-6 col-lg-3 text-center">
            <h5>Payment methods</h5>
            <img src="img/payment.jpg" class="img-fluid" width="220">
         </div>

      </div>
   </footer>
   <!--/Footer-->
</body>
</html>
