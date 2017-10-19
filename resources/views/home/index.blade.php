@extends('layout')

@section('content')
<div class="container home">
    @include('partial.carousel')
    @include('home.partial.h_menu', ['title' => 'TRENDING', 'class_title' => 'trending', 'number' => '1'])
    @include('home.partial.h_menu', ['title' => 'RECOMENDED', 'class_title' => 'recommended', 'number' => '2'])
    @include('home.partial.h_menu', ['title' => 'PROMOTION', 'class_title' => 'promotion', 'number' => '3'])
</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection

@section('body_script')
<script data-require="jquery" data-semver="2.1.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#right-button-1').click(function() {
        event.preventDefault();
        $('#content1').animate({
            scrollLeft: "+=200px"
        }, "slow");
    });

    $('#left-button-1').click(function() {
        event.preventDefault();
        $('#content1').animate({
            scrollLeft: "-=200px"
        }, "slow");
    });

    $('#right-button-2').click(function() {
        event.preventDefault();
        $('#content2').animate({
            scrollLeft: "+=200px"
        }, "slow");
    });

    $('#left-button-2').click(function() {
        event.preventDefault();
        $('#content2').animate({
            scrollLeft: "-=200px"
        }, "slow");
    });

    $('#right-button-3').click(function() {
        event.preventDefault();
        $('#content3').animate({
            scrollLeft: "+=200px"
        }, "slow");
    });

    $('#left-button-3').click(function() {
        event.preventDefault();
        $('#content3').animate({
            scrollLeft: "-=200px"
        }, "slow");
    });
</script>
@endsection