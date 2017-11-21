@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/directory.css')}}">
@endsection

@section('content')
<div class="directory">
    <div class="container">
        @include('partial.breadcrumb', ['breadcrumb' => [['name' => trans('breadcrumb.home'), 'link' => '/']],
                                                    'active_bread' => trans('breadcrumb.directory')])
        <h1>@lang('blog.directory')</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6"><div id="map"></div></div>
          <div class="col-md-6">@include('directory.directory_tab.directory_tab')</div>
      </div>
    </div>

</div>
<script>
  function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: 5.980408, lng: 116.073457},
      zoom: 12
    });
  }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARzgseB8wPPpiP65N9rzPqFwcdA4WuugY&callback=initMap"></script>
@endsection