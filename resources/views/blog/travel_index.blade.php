@extends('layout')

@section('content')
<div class="container blog">
    <div class="row">
        <div class="col-xs-2 filter" >
            <h2>@lang('blog.filter')</h2>
            @include('blog/partial/travel_filter')
        </div>
        <div class="col-xs-10">
            @include('partial.breadcrumb', ['breadcrumb' => [['name' => trans('breadcrumb.home'), 'link' => '/']],
                                                'active_bread' => trans('breadcrumb.travelling')])
            <h1>@lang('blog.travelling')</h1>
            <div class="row">
                @foreach($posts as $p)
                    <div class="col-sm-4">
                        <a href="{{URL::to($locale . '/travel/' . $p->id)}}" style="text-decoration: none"><div class="item_card" style="background-image: url({{asset('images/' . $p->image)}});">
                            <div id="overlay">
                                <p class="text-center title">{{$p->title}}</p>
                                <p class="text-center time"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$p->created_at->toFormattedDateString()}}</p>
                            </div>
                        </div></a>
                    </div>
                @endforeach
            </div>
            {{$posts->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
@endsection