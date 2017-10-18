<!DOCTYPE html>
<html>
<head>
    <title>JomKK</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- styles --}}
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    @yield('style')
    {{-- scripts --}}
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
</body>
</html>