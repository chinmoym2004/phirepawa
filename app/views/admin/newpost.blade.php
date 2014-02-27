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
            @foreach($noofpost as $post)
              <tr>
                <td>{{$post->firstname.' '.$post->lastname}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->postedon}}</td>
                <td>
                    <a href="{{url('admin/delete/'.$post->blogid)}}" data-id="{{$post->blogid}}" title="Delete This Post" class="operation"><span class="glyphicon glyphicon-remove-circle"></span></a>
                    <a href="{{url('admin/verify/'.$post->blogid)}}" data-id="{{$post->blogid}}" title="Mark as Verified" class="operation"><span class="glyphicon glyphicon-ok-circle"></span></a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>