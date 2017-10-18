@extends('layout')

@section('content')
<div class="container home">
    @include('partial.carousel')
    <h1>TRENDING</h1>
    <div class="row trending">
        <div class="col-md-4">
            <div id="home_food" style="background-image: url('images/food1.png')"></div>
            <div id="info">
                <p id="trend_title">Bluberry Breakfast</p>
                <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
            </div>
        </div>
        <div class="col-md-4">
            <div id="home_food" style="background-image: url('images/food2.png')"></div>
            <div id="info">
                <p id="trend_title">Bluberry Breakfast</p>
                <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
            </div>
        </div>
        <div class="col-md-4">
            <div id="home_food" style="background-image: url('images/food1.png')"></div>
            <div id="info">
                <p id="trend_title">Bluberry Breakfast</p>
                <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection