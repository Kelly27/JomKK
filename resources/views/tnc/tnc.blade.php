@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/tnc.css')}}">
@endsection

@section('content')
<div class="tnc container">
@include('partial.breadcrumb', ['breadcrumb' => [['name' => 'Home', 'link' => '/']],
                                                'active_bread' => 'Terms and Condition  '])
<h1>TERMS AND CONDITIONS</h1>
<p class="text-justify">{{$intro}}</p>
</div>
@endsection