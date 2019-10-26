<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sky - Dashboard') }}</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
   
   <!-- SideBar -->

    <div class="wrapper">
      <nav id="sidebar">

        <a class="navbar-brand ml-4 mt-4" href="#">
          <img src="{{ asset('img/logo.png') }}" width="30" height="30" class="d-inline-clock align-top" alt="">
          Sky
        </a>

        <div class="container mt-4 mb-2">

          <div class="mb-2">
            <img src="{{ asset('img') }}/{{ Auth::user()->image }}" class="img-responsive" style="border-radius: 50%;" alt="" width="70">
          </div>

          <div class="profile-usertitle mt-4">
            <div class="profile-usertitle-name mb-2">{{ Auth::user()->name }}</div>
            <div class="profile-usertitle-status">{{ Auth::user()->email }}</div>
          </div>

        </div>
        
        <ul class="list-unstyled components">

          <li class="active">
            <a href="#"><i class="fas fa-chart-line"></i> Panel</a>
          </li>

          <li>
              <a href="#profileSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-circle"></i> My profile</a>
              <ul class="collapse list-unstyled" id="profileSubmenu">
                  <li>
                       <a href="#"> View my profile</a>
                  </li>
                  <li>
                      <a href="#"> Update my profile</a>
                  </li>
              </ul>
          </li>

          <li>
            <a href="#filesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-file-upload"></i> My files</a>
            <ul class="collapse list-unstyled" id="filesSubmenu">
              <li>
                <a href="{{ route('file.create') }}"> Upload file</a>
              </li>
              <li>
                <a href="{{ route('file.images') }}"> Images</a>
              </li>
              <li>
                <a href="{{ route('file.videos') }}"> Videos</a>
              </li>
              <li>
                <a href="{{ route('file.docs') }}"> Docs</a>
              </li>
              <li>
                <a href="{{ route('file.audios') }}"> Audios</a>
              </li>
            </ul>  
          </li>
          
          <li>
            <a href="#rolesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-circle"></i> Roles</a>
            <ul class="collapse list-unstyled" id="rolesSubmenu">
              
              <li>
                <a href="{{ route('roles.index') }}"> View all</a>
              </li>
              <li>
                <a href="{{ route('roles.create') }}"> Add role</a>
              </li>

            </ul>
          </li>

          <li>
            <a href="#permissionSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-fingerprint"></i> Permissions</a>
              <ul class="collapse list-unstyled" id="permissionSubmenu">            
              <li>
                <a href="{{ route('permission.index') }}"> View all</a>
              </li>
              <li>
                <a href="{{ route('permission.create') }}"> Add permission</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-circle"></i> Users</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              
              <li>
                <a href="{{ route('users.index') }}"> View all</a>
              </li>
              <li>
                <a href="{{ route('users.create') }}"> Add user</a>
              </li>

            </ul>
          </li>

          <li>
            <a href="#"><i class="far fa-question-circle"></i> Support</a>
          </li>
        </ul>

        <ul class="list-unstyled CTAs">
          <li>
            <a href="{{ route('logout') }}" class="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-power-off"></i> Logout
            </a>
          </li>

          <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display: none;">
            @csrf
          </form>

        </ul>
      </nav>

      <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a>@yield('page')</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    

   <!-- /SideBar -->
   
  @yield('content')

</div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

   <!-- Open/Close sidenav -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
   
  @yield('scripts')



</body>
</html>
