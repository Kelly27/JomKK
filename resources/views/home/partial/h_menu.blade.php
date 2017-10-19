<h1>{{$title}}</h1>
<div class="row vertical-align">
    <div class="col-xs-1" style="width: 5%">
        <button id="{{'left-button-' . $number}}">
            <i class="glyphicon glyphicon-chevron-left"></i>
        </button>
    </div>
    <div class="col-xs-10" style="width: 90%">
        <div class="{{$class_title}}" id="{{'content' . $number}}">
            @for ($i = 0; $i < 10; $i++)
            @if($i%2 == 0)
            @include('home.partial.index_card', ['image_name' => 'food1'])
            @else
            @include('home.partial.index_card', ['image_name' => 'food2'])
            @endif
            @endfor
        </div>
    </div>
    <div class="col-xs-1" style="width: 5%">
        <button id="{{'right-button-' . $number}}" style="float: right;">
            <i class="glyphicon glyphicon-chevron-right"></i>
        </button>
    </div>
</div>