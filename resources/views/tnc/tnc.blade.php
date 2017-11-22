@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/tnc.css')}}">
@endsection

@section('content')
<div class="tnc container">
@include('partial.breadcrumb', ['breadcrumb' => [['name' => trans('breadcrumb.home'), 'link' => '/']],
                                                'active_bread' => trans('breadcrumb.tnc')])
<h1>@lang('blog.tnc')</h1>
<p class="text-justify">{{$intro}}</p>
</div>
@endsection