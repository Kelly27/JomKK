<div class="directory_tab" style="margin-top: -80px">
    <ul class="nav nav-pills" style="padding-left: 0;">
        <li class="active">
            <a href="#1t" data-toggle="tab"><h4>FOOD</h4></a>
        </li>
        <li><a href="#2t" data-toggle="tab"><h4>TRAVELLING</h4></a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active directory_content" id="1t">
            <div class="row">
                <div class="col-xs-3">
                    <h2>Filter</h2>
                    @include('directory.directory_tab.food_filter')
                </div>
                <div class="col-xs-9">
                    <div class="row">
                        @php
                        $index = 0;
                        @endphp
                        @foreach($food as $f)
                        <div class="col-sm-6">
                            <a href="#" data-toggle="modal" data-target="<?php echo '#myModal' . $index;?>" style="text-decoration: none"><div class="item_card" style="background-image: url({{asset('images/' . $f->image)}});">
                                <div id="overlay">
                                    <p class="text-center title">{{$f->title}}</p>
                                </div>
                            </div></a>
                        </div>

                        {{-- modal --}}
                        <div id="<?php echo 'myModal' . $index;?>" class="modal">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" id="close-button">&times;</button>
                                <h4 class="modal-title">{{$f->title}}</h4>
                              </div>
                              <div class="modal-body">
                                <div class="image-bg" style="background-image: url({{asset('images/' . $f->image)}});"></div>
                                <p>Some text in the modal.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        @php
                        $index++;
                        @endphp
                        @endforeach
                    </div>
                    <div class="text-center">{{$food->render()}}</div>
                </div>
            </div>
        </div>
        <div class="tab-pane directory_content" id="2t">
            <div class="row">
                <div class="col-xs-3">
                    <h2>Filter</h2>
                    @include('directory.directory_tab.travel_filter')
                </div>
                <div class="col-xs-9">
                    <div class="row">
                        @foreach($travel as $t)
                        <div class="col-sm-6">
                            <a href="#" style="text-decoration: none"><div class="item_card" style="background-image: url({{asset('images/' . $t->image)}});">
                                <div id="overlay">
                                    <p class="text-center title">{{$t->title}}</p>
                                </div>
                            </div></a>
                        </div>
                        @php
                        $title = $t->title;
                        @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

