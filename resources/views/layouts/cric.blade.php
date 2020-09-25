<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cricnext Live Cricket Scores </title>
    <link href="{{asset('/img/icon.png')}}" rel="icon" sizes="32x32"/>
    
    <link rel="stylesheet" href="{{asset('/css/cricnext.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/vendor.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/test.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto.min.css" rel="stylesheet">
</head>
<body>
<body>

    <div class="navbar-container">
      <div class="bg-dark navbar-dark" data-sticky="top">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
              <b>Cricnext</b>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon-menu h4"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item">
                  <a href="{{url('/about')}}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/teams')}}" class="nav-link">Teams</a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/players')}}" class="nav-link">Players</a>
                </li>
                
               
              </ul>
              

              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link p-lg-0" href="{{url('login')}}" id="dropdown01"   aria-expanded="false">
                   Login
                  </a>
                  
                  </div>
                </li>
              </ul>

            </div>
            <!--end nav collapse-->
          </nav>
        </div>
        <!--end of container-->
      </div>
    </div>

  @yield('content')
</div>
        
<footer class="footer-short">
        <div class="container">
          <hr>
          <nav class="row justify-content-between align-items-center">
            <div class="col-auto">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#">
                    <h4> <b>Cricnext</b> </h4>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="{{asset(url('/'))}}">Homepage</a>
                </li>
                <li class="list-inline-item">
                  <a href="{{asset(url('/about'))}}">About</a>
                </li>
                <li class="list-inline-item">
                  <a href="{{asset(url('/login'))}}">Admin Login</a>
                </li>
              </ul>
            </div>
            <!--end of col-->
            <div class="col-auto text-sm-right">
              <ul class="list-inline">
                <li class="list-inline-item">
                <a href="" class="card-link text-dark"><i class="fi fi-github"></i></a>
                </li>
                <li class="list-inline-item">
                <a href="" class="card-link text-dark"><i class="fi fi-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                <a href="" class="card-link text-dark"><i class="fi fi-facebook"></i></a>
                </li>
              </ul>
            </div>
            <!--end of col-->
          </nav>
          <!--end of row-->
          <div class="row">
            <div class="col">
              <small>&copy; 2020 Cricnext All rights Reserved</small>
            </div>
            <!--end of col-->
          </div>
          <!--end of row-->
        </div>
        <!--end of container-->
      </footer>
    </div>          
       

    
    <script src="{{asset('/js/vendor.js')}}"></script>
    <script src="{{asset('/js/app.js')}}"></script>
    
</body>
</html>
