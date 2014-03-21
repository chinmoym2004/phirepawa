<a href="{{url('admin/dashboard')}}" title="Go to Dahboard" class="operation pull-left"><span class="glyphicon glyphicon-chevron-left"></span></a><br>
        <h4>Post not yet verified</h4>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th class="">Author</td>
              <th class="">Blog Title</td>
              <th class="">Posted On</td>
              <th class="">Operation</td>
            </tr>
            @foreach($noofforum as $forum)
              <tr>
                <td>{{$forum->firstname.' '.$forum->lastname}}</td>
                <td>{{$forum->title}}</td>
                <td>{{$forum->postedon}}</td>
                <td>
                    <a href="{{url('admin/forumremove/'.$forum->forumid)}}" data-id="{{$forum->forumid}}" title="Delete This Post" class="operation"><span class="glyphicon glyphicon-remove-circle"></span></a>
                    <a href="{{url('admin/forumverify/'.$forum->forumid)}}" data-id="{{$forum->forumid}}" title="Mark as Verified" class="operation"><span class="glyphicon glyphicon-ok-circle"></span></a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>