<div class="">
    <div class="col-sm-4 column" id="col1">

    </div>
    <div class="col-sm-4 column" id="col2">

    </div>
    <div class="col-sm-4 column" id="col3">

    </div>
</div>

<div class="">
    <div class="col-sm-8 pull-left" id="showstatic">
        {{$home}}
    </div>
    <div class="col-sm-4 pull-left" id="showEvennews">
        <div class="microsoft container1">
            <div class="marquee">
                @foreach($getallevents as $key)
                    <div>
                        <div>
                            <img src="{{URL::asset('assets_files/img/1386334827_calendar_alt_fill.png')}}" class="pull-left"/>
                            {{$key->event_date}}
                        </div>
                        <div>
                            {{$key->event_title}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>