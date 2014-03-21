<a href="{{url('admin/dashboard')}}" title="Go to Dahboard" class="operation pull-left"><span class="glyphicon glyphicon-chevron-left"></span></a><br>
        <h4>Post not yet verified</h4>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th class="">Author</td>
              <th class="">Blog Title</td>
              <th class="">Context</td>
              <th class="">Posted On</td>
              <th class="">Operation</td>
            </tr>
            @foreach($noofcomments as $noofcomments)
              <tr>
                <td>{{$noofcomments->firstname.' '.$noofcomments->lastname}}</td>
                <td>{{$noofcomments->combody}}</td>
                <td>{{$noofcomments->context}}</td>
                <td>{{$noofcomments->postedon}}</td>
                <td>
                    <a href="#" data-id="{{$noofcomments->commentid}}" title="Delete This Post" class="operation commentdelete"><span class="glyphicon glyphicon-remove-circle"></span></a>
                    <a href="#" data-id="{{$noofcomments->commentid}}" title="Mark as Verified" class="operation commentverify"><span class="glyphicon glyphicon-ok-circle"></span></a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>