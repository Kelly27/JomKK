@extends('layout')

@section('content')
<div class="article">
    <div class="text-center">

        @php
        if(Request::segment(2) == 'food'){
            $current_page_name = trans('breadcrumb.food');
            $current_page_link = "/food";
        }
        else{
            $current_page_name = trans('breadcrumb.travelling');
            $current_page_link = "/travel";
        }
        @endphp

        @include('partial.breadcrumb', ['breadcrumb' => [['name' => trans('breadcrumb.home'), 'link' => '/'],
                                                         ['name' => $current_page_name, 'link' => URL::to($locale . $current_page_link)]],
                                                          'active_bread' => $article->title])
        <h1>{{$article->title}}</h1>
        <p class="text-center time"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$article->created_at->toFormattedDateString()}}</p>
        <img src="{{asset('images/' . $article->image)}}" class="img-responsive article-image">
        <p class="article-content">
            @php
            $content = 'content_' . $locale;
            echo $article->$content;
            @endphp
        </p>
    </div>
    <hr style="border-color: #C98474; border-width: 2px;">
    <h2 class="text-left">@lang('blog.also_like')</h2>
    <div class="row">
        @foreach($posts as $p)
        <div class="col-sm-4 blog">
            <a href="{{URL::to($locale . $current_page_link . '/' . $p->id)}}" style="text-decoration: none"><div class="item_card" style="background-image: url({{asset('images/' . $p->image)}});">
                <div id="overlay">
                    <p class="text-center title">{{$p->title}}</p>
                    <p class="text-center time"><i class="fa fa-clock-o" aria-hidden="true"></i> {{$p->created_at->toFormattedDateString()}}</p>
                </div>
            </div></a>
        </div>
        @endforeach
    </div>
    <div class="text-right" style="margin-bottom: 15px;">
        <a id="more_link" href="{{URL::to($locale . $current_page_link)}}">@lang('blog.more') >></a>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/blog.css')}}">
@endsection