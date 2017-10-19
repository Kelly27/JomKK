@extends('layout')

@section('content')
<div class="container blog">
    <div class="row">
        <div class="col-xs-2 filter" >
            <h2>Filter</h2>
            @include('blog/partial/travel_filter')
        </div>
        <div class="col-xs-10">
            @include('partial.breadcrumb', ['breadcrumb' => [['name' => 'Home', 'link' => '/']],
                                                'active_bread' => 'Travelling'])
            <h1>TRAVELLING</h1>
            <div class="row">
                @for($i = 0; $i < 15; $i++)
                <div class="col-sm-4">
                    @if($i%2 == 0)
                    <a href="#" style="text-decoration: none"><div class="item_card" style="background-size: cover;background-image: url({{asset('images/travel1.png')}});">
                        <div id="overlay">
                            <p class="text-center title">Amazing Breakfast at IMAGO</p>
                            <p class="text-center time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                        </div>
                    </div></a>
                    @elseif($i%3 == 0)
                    <a href="#" style="text-decoration: none"><div class="item_card" style="background-size: cover;background-image: url({{asset('images/travel2.png')}});">
                        <div id="overlay">
                            <p class="text-center title">Enjoy the Sea View at Suria Food Court</p>
                            <p class="text-center time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                        </div>
                    </div></a>
                    @elseif($i%5 == 0)
                    <a href="#" style="text-decoration: none"><div class="item_card" style="background-size: cover;background-image: url({{asset('images/travel3.png')}});">
                        <div id="overlay">
                            <p class="text-center title">Enjoy the Sea View at Suria Food Court</p>
                            <p class="text-center time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                        </div>
                    </div></a>
                    @else
                    <a href="#" style="text-decoration: none"><div class="item_card" style="background-size: cover;background-image: url({{asset('images/travel4.png')}});">
                        <div id="overlay">
                            <p class="text-center title">Enjoy the Sea View at Suria Food Court</p>
                            <p class="text-center time"><i class="fa fa-clock-o" aria-hidden="true"></i> 2nd Oct, 2017</p>
                        </div>
                    </div></a>
                    @endif
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
@endsection