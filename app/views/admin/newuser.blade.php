<a href="{{url('admin/dashboard')}}" title="Go to Dahboard" class="operation pull-left"><span class="glyphicon glyphicon-chevron-left"></span></a><br>
        <h4>user not yet verified</h4>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th class="">Name</td>
              <th class="">Email id</td>
              <th class="">Registaration no</td>
              <th class="">Operation</td>
            </tr>
            @foreach($noofuser as $noofuser)
              <tr>
                <td>{{$noofuser->firstname.' '.$noofuser->lastname}}</td>
                <td>{{$noofuser->email}}</td>
                <td>{{$noofuser->regno}}</td>
                <td>
                    <!-- <a href="#" data-id="{{$noofuser->id}}" title="Delete This Post" class="operation commentdelete"><span class="glyphicon glyphicon-remove-circle"></span></a> -->
                    <a href="#" data-id="{{$noofuser->id}}" title="Mark as Verified" class="operation userverify"><span class="glyphicon glyphicon-ok-circle"></span></a>
                </td>
              </tr>
            @endforeach
          </table>
        </div>