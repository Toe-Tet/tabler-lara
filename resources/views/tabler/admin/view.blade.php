@extends('tabler.layouts.master')

@section('content')
	<div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login myform mx-auto">
              <form class="card" action="">
                <div class="card-body p-6">
                  <div class="card-title">View User</div>
					@foreach($users as $user)
                  <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" disabled>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" disabled>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Phone No</label>
                    <input type="number" name="phno" class="form-control" value="{{ $user->phno }}" disabled>
                  </div>
                  <div class="form-group">
                    <label class="form-label">No</label>
                    <input type="text" name="address" class="form-control" value="{{ $user->address }}" disabled>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Region (Division)</label>
                    <input type="text" name="region" class="form-control" value="{{ $user->region }}" disabled>
                  </div>
                  <script>
                    function initMap() {
                      var uluru = {lat: {{ $user->lat }},lng: {{ $user->lng }}};
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: uluru
                      });

                      var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                      });
                      map.setTilt(45);
                    }
                  </script>
                  <div class="form-group">
                    <label class="form-label">Position</label>
                    <div id="map"></div>
                    <input type="text" id="lat" name="lat" readonly="yes" class="form-control" value="{{ $user->lat }}" disabled>
                    <input type="text" id="lng" name="lng" readonly="yes" class="form-control" value="{{ $user->lng }}" disabled>
                    <script async defer
                      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDfDCDfWALugjTIJFA011TXq4kjpMXsPg&callback=initMap">
                    </script>
                  </div>
				@endforeach
                  <div class="form-footer">
                    <a href="{{ route('admins.index') }}" class="btn btn-secondary btn-block">Back</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
@endsection