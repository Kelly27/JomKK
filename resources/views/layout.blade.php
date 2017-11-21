<!DOCTYPE html>
<html>
<head>
    <title>JomKK</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- styles --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    @yield('style')
    {{-- scripts --}}
    <script src="{{asset('js/app.js')}}"></script>
    @yield('head_script')
</head>
<body>
    <div id='app'></div>
    @include('partial.header')
    @yield('content')
    @include('partial.footer')

    @yield('body_script')
</body>
</html>