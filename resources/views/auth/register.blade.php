<!doctype html>
<html lang="en" dir="ltr">
  
  <title>Register</title>

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

    <style>

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

  <style>
    .myform {
        max-width: 80%;
      }
  </style>

  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login myform mx-auto">
              <div class="text-center mb-6">
                <img src="/template/logo.svg" class="h-6" alt="">
              </div>
              <form class="card" action="{{ route('users.store') }}" method="post">
                @csrf
                <div class="card-body p-6">
                  <div class="card-title">Create new account</div>
                  <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter name" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-label">Phone No</label>
                    <input type="number" name="phno" class="form-control{{ $errors->has('phno') ? ' is-invalid' : '' }}" placeholder="Enter Phone No" value="{{ old('phno') }}" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Enter Address" value="{{ old('address') }}" required>
                    @if ($errors->has('address'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-label">Region (Division)</label>
                    <input type="text" name="region" class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" placeholder="Enter Region" value="{{ old('region') }}" required>
                    @if ($errors->has('region'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('region') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-label">Position</label>
                    <div id="map"></div>
                    <input type="text" id="lat" name="lat" readonly="yes" value="{{ old('lat') }}" class="form-control" required>
                    <input type="text" id="lng" name="lng" readonly="yes" value="{{ old('lng') }}" class="form-control" required>
                    @if ($errors->has('lat'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('lat') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('lng'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('lng') }}</strong>
                        </span>
                    @endif
                    <script async defer
                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDfDCDfWALugjTIJFA011TXq4kjpMXsPg&callback=initMap">
                    </script>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" required/>
                      <span class="custom-control-label">Agree the <a href="">terms and policy</a></span>
                    </label>
                  </div>
                  <div class="form-footer">

                    <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Already have account? <a href="{{ route('login') }}">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script>
    //Set up some of our variables.
    var map; //Will contain map object.
    var marker = false; ////Has the user plotted their location marker? 
            
    //Function called to initialize / create the map.
    //This is called when the page has loaded.
    function initMap() {

        //The center location of our map.
        var centerOfMap = new google.maps.LatLng(19.7450008, 96.1297226);

        //Map options.
        var options = {
          center: centerOfMap, //Set center.
          zoom: 6 //The zoom value.
        };

        //Create the map object.
        map = new google.maps.Map(document.getElementById('map'), options);

        //Listen for any clicks on the map.
        google.maps.event.addListener(map, 'click', function(event) {                
            //Get the location that the user clicked.
            var clickedLocation = event.latLng;
            //If the marker hasn't been added.
            if(marker === false){
                //Create the marker.
                marker = new google.maps.Marker({
                    position: clickedLocation,
                    map: map,
                    draggable: true //make it draggable
                });
                //Listen for drag events!
                google.maps.event.addListener(marker, 'dragend', function(event){
                    markerLocation();
                });
            } else{
                //Marker has already been added, so just change its location.
                marker.setPosition(clickedLocation);
            }
            //Get the marker's location.
            markerLocation();
        });
    }
            
    //This function will get the marker's current location and then add the lat/long
    //values to our textfields so that we can save the location.
    function markerLocation(){
        //Get location.
        var currentLocation = marker.getPosition();
        //Add lat and lng values to a field that we can save.
        document.getElementById('lat').value = currentLocation.lat(); //latitude
        document.getElementById('lng').value = currentLocation.lng(); //longitude
    }
            
            
    //Load the map when the page has finished loading.
    google.maps.event.addDomListener(window, 'load', initMap);
  </script>

  </body>
</html>
