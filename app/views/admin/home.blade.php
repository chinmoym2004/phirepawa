<div class="tab-pane fade in active" id="dashboard">
        
        <div class="col-xs-6 col-md-3">
          <a href="{{url('admin/allnewuser')}}" class="thumbnail" style="height: 101px;">
              New user<span class="badge pull-right">{{$noofuser}}</span>  
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="{{url('admin/allnewlyblog')}}" class="thumbnail" style="height: 101px;">
              New Post<span class="badge pull-right">{{count($noofpost)}}</span>  
          </a>
        </div>

        <div class="col-xs-6 col-md-3">
          <a href="{{url('admin/allnewlyfaq')}}" class="thumbnail" style="height: 101px;">
              New Faq<span class="badge pull-right">{{count($nooffaq)}}</span>  
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="{{url('admin/allnewlyforum')}}" class="thumbnail" style="height: 101px;">
              New Forum<span class="badge pull-right">14</span>  
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="{{url('admin/allnewlycomment')}}" class="thumbnail" style="height: 101px;">
              New Coments<span class="badge pull-right">{{count($noofcomments)}}</span>  
          </a>
        </div>

        <!--All  Add-->
        @if(Auth::user()->usertype=='super')
          <div class="col-xs-6 col-md-3">
            <a href="{{url('admin/adduser')}}" class="thumbnail" style="height: 101px;">
                Add User<span class="badge pull-right"></span>  
            </a>
          </div>
        @endif
        <div class="col-xs-6 col-md-3">
          <a href="{{url('admin/addnews')}}" class="thumbnail" style="height: 101px;">
              Add News<span class="badge pull-right"></span>  
          </a>
        </div>
        <div class="col-xs-6 col-md-3">
          <a href="{{url('admin/addevents')}}" class="thumbnail" style="height: 101px;">
              Add Event<span class="badge pull-right"></span>  
          </a>
        </div>
</div>
