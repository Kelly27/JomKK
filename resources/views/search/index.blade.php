@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">
@endsection

@section('head_script')
{{-- <script src="jquery.js" type="text/javascript"></script> --}}
<script src="{{asset('js/jquery.dotdotdot.js')}}" type="text/javascript"></script>
@endsection

@section('body_script')
<script type="text/javascript">
    $(document).ready(function() {
    $(".article-content").dotdotdot({
        ellipsis: "\u2026 ",
        height: 100,
        keep: null,
        truncate: "word",
        watch: "window",
    });
});
</script>
@endsection

@section('content')
<div class="container search">
    @include('partial.breadcrumb', ['breadcrumb' => [['name' => 'Home', 'link' => '/']],
                                                    'active_bread' => 'Search Result'])
    <h1>SEARCH RESULT</h1>
    <p class="query_info">Query: </p>
    <div class="row">
        <div class="col-md-6">
            <div class="container-fluid item_card">
                <div class="row">
                    <div class="col-xs-4 nopadding">
                        <div class="img-bg" style="background-image: url({{asset('images/' . $food->image)}});"></div>
                    </div>
                    <div class="col-xs-8">
                        <h3>{{$food->title}}</h3>
                        <p class=date><i class="fa fa-clock-o" aria-hidden="true"></i> {{$food->created_at->toFormattedDateString()}}</p>
                        <p class="text-justify article-content">
                            @php
                            $content = 'content_' . $locale;
                            echo $food->$content;
                            @endphp
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection