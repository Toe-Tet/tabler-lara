<!doctype html>
<html lang="en" dir="ltr">

  @yield('title')
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="/template/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />

    <!-- For Datatables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- DataTables -->
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

      .myform {
        max-width: 80% !important;
      }

      #map {
            height: 400px;
            width: 100%;
           }

      input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
    </style>
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="/template/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="/template/css/dashboard.css" rel="stylesheet" />
    <script src="/template/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/template/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="/template/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/template/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="/template/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/template/plugins/input-mask/plugin.js"></script>
  </head>

    <body class="">
    <div class="page">
      <div class="page-main">
		
		<!-- Menu -->
    	<div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.html">
                <img src="/template/logo.svg" class="header-brand-img" alt="tabler logo">
              </a>
              
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  @if(Auth::user()->status == "user")
                  <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                  </li>
                  @else
                  <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active"><i class="fe fe-user"></i> User</a>
                  </li>
                  @endif
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fe fe-log-out"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                  
                  
                </ul>
              </div>
            </div>
          </div>
        </div>

        @yield('content')

        @stack('scripts')

      </div>
    </div>

  </body>
</html>