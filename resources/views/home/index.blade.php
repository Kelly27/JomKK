@extends('layout')

@section('content')
<div class="container home">
    @include('partial.carousel')
    <h1>TRENDING</h1>
    <div class="row vertical-align">
        <div class="col-xs-1" style="width: 5%">
            <button id="left-button">
                <i class="glyphicon glyphicon-chevron-left"></i>
            </button>
        </div>
        <div class="col-xs-10" style="width: 90%">
            <div class="trending" id="content">
                <div class="internal">
                    <div id="home_food" style="background-image: url('images/food1.png')"></div>
                    <div id="info">
                        <p id="trend_title">Bluberry Breakfast</p>
                        <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                    </div>
                </div>
                <div class="internal">
                    <div id="home_food" style="background-image: url('images/food1.png')"></div>
                    <div id="info">
                        <p id="trend_title">Bluberry Breakfast</p>
                        <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                    </div>
                </div>
                <div class="internal">
                    <div id="home_food" style="background-image: url('images/food1.png')"></div>
                    <div id="info">
                        <p id="trend_title">Bluberry Breakfast</p>
                        <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                    </div>
                </div>
                <div class="internal">
                    <div id="home_food" style="background-image: url('images/food1.png')"></div>
                    <div id="info">
                        <p id="trend_title">Bluberry Breakfast</p>
                        <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                    </div>
                </div>
                <div class="internal">
                    <div id="home_food" style="background-image: url('images/food1.png')"></div>
                    <div id="info">
                        <p id="trend_title">Bluberry Breakfast</p>
                        <p id="trend_time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-1" style="width: 5%">
            <button id="right-button" style="float: right;">
                <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
        </div>
    </div>

</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection