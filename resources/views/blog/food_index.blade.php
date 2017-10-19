@extends('layout')

@section('content')
<div class="container blog">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            @include('partial.breadcrumb', ['breadcrumb' => [['name' => 'Home', 'link' => '/']],
                                                'active_bread' => 'Food'])
            <h1>Food</h1>
        </div>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
@endsection