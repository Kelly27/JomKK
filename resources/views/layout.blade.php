<!DOCTYPE html>
<html>
<head>
    <title>JomKK</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- styles --}}
    <link href="css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    @yield('style')
    {{-- scripts --}}
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    @include('partial.header')
    @yield('content')
    @include('partial.footer')
    <script data-require="jquery" data-semver="2.1.1" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('#right-button').click(function() {
            event.preventDefault();
            $('#content').animate({
                scrollLeft: "+=200px"
            }, "slow");
        });

        $('#left-button').click(function() {
          event.preventDefault();
          $('#content').animate({
            scrollLeft: "-=200px"
        }, "slow");
      });
  </script>
</body>
</html>