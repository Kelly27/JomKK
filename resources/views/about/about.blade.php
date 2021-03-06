@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/about.css')}}">
@endsection

@section('content')
<div class="about container">
@include('partial.breadcrumb', ['breadcrumb' => [['name' => trans('breadcrumb.home') , 'link' => '/']],
                                                'active_bread' => trans('breadcrumb.about') ])
<h1>@lang('blog.about')</h1>
<div class="row">
    <div class="col-sm-8">
        <p class="text-justify">{{$intro}}</p>
    </div>
    <div class="col-sm-4">
        <h2>@lang('blog.contact')</h2>
        <table>
            <tr>
                <td>@lang('blog.phone')</td>
                <td>:</td>
                <td id="grey"> &nbsp 088-123456</td>
            </tr>
            <tr>
                <td>@lang('blog.address')</td>
                <td>:</td>
                <td id="grey"> &nbsp 5037 Diam Rd. Daly City Ohio 90255</td>
            </tr>
        </table>
    </div>
</div>
    <h3>@lang('blog.vision')</h3>
    <ul>
        <li>{{$vision[0]}}</li>
        <li>{{$vision[0]}}</li>
        <li>{{$vision[1]}}</li>
    </ul>
    <h3>@lang('blog.mission')</h3>
    <ul>
        <li>{{$vision[0]}}</li>
        <li>{{$vision[0]}}</li>
        <li>{{$vision[1]}}</li>
    </ul>
</div>
@endsection