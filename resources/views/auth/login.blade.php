<!doctype html>
<html lang="en" dir="ltr">
  
  <title>Login</title>
  
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
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="/template/logo.svg" class="h-6" alt="">
              </div>
              <form class="card" method="POST" action="{{ route('login') }}">
                        @csrf
                <div class="card-body p-6">
                  <div class="card-title">Login to your account</div>
                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Password
                    </label>
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }} />
                      <span class="custom-control-label">Remember me</span>
                    </label>
                  </div>         
                  <div class="form-footer">
                    <input type="submit" value="Sign In" class="btn btn-primary btn-block" name="submit">
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


