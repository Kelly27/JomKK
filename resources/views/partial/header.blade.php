<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{URL::to('/')}}"><img src="{{asset('images/logo.png')}}" class="img-responsive logo"></a>
            </div>
            <div class="col-sm-7">
                <p class="header-title">Food and Travelling Weblog for KK</p>
            </div>
            <div class="col-sm-3">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <a href="" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
                </form>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{URL::to('/')}}" id="nav_css">@lang('layout.home')</a></li>
            <li><a href="{{URL::to('/food')}}" id="nav_css">FOOD</a></li>
            <li><a href="{{URL::to('/travel')}}" id="nav_css">TRAVELLING</a></li>
            <li><a href="#" id="nav_css">DIRECTORY</a></li>
            <li class="dropdown" style="position: relative; float: right;">
                @php
                $lang = ['en', 'ch', 'my'];
                @endphp
                <a href="#" id="nav_css" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="float: right;">
                    @php
                    switch ($locale) {
                        case "ch":
                            echo 'CH';
                            break;
                        case "my":
                            echo 'MY';
                            break;
                        default:
                            echo 'EN';
                            break;
                    }
                    @endphp
                <span class="caret"></span></a>
                <ul class="dropdown-menu" style="background-color: #c86b59;">
                    @php
                    for($i=0; $i < count($lang); $i++){
                        if($locale == $lang[$i]){
                            array_splice($lang, $i, 1);
                        }
                    }
                    @endphp
                    @foreach($lang as $l)
                       <li><a href="{{URL::to($l . '/index')}}" id="drop_css">{{strtoupper($l)}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</nav>