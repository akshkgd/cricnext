<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>J. K. Institute of Applied Physics and Technology</title>
    <link href="{{asset('/img/icon.png')}}" rel="icon" sizes="32x32"/>
    
    <link rel="stylesheet" href="{{asset('/css/cricnext.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/vendor.css')}}" />
    <link rel="stylesheet" href="{{asset('/css/test.css')}}" />
</head>
<body>
<body>

    <div class="navbar-container">
      <div class="bg-dark navbar-dark" data-sticky="top">
        <div class="container">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
             CricNext
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon-menu h4"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
              <ul class="navbar-nav">
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
        
            
       

    
    <script src="{{asset('/js/vendor.js')}}"></script>
    <script src="{{asset('/js/app.js')}}"></script>
    
</body>
</html>
