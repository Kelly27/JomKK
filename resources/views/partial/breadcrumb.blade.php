<ol class="breadcrumb">
    @foreach($breadcrumb as $b)
    <li><a href="{{URL::to($b['link'])}}">{{$b['name']}}</a></li>
    @endforeach
    <li class="active">{{$active_bread}}</li>
</ol>