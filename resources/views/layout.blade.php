<!DOCTYPE html>
<html>
<head>
    <title>JomKK</title>

    {{-- styles --}}
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">

    {{-- scripts --}}
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    @include('partial.header')
    @yield('content')
</body>
</html>