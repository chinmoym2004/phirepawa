<a href="{{url('admin/dashboard')}}" title="Go to Dahboard" class="operation pull-left"><span class="glyphicon glyphicon-chevron-left"></span></a><br>
        <h4>Admin and super user</h4>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th class="">First name</td>
              <th class="">Last name</td>
              <th class="">Email</td>
              <th class="">Registartion no</td>
              <th class="">user Type</td>
            </tr>
            @foreach($getuser as $user)
              <tr>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->regno}}</td>
                <td>{{$user->usertype}}</td>
                <td>
                  <a href="#" data-id="{{$user->faqid}}" title="Delete This Post" class="operation"><span class="glyphicon glyphicon-remove-circle"></span></a>
                  <a href="#" data-id="{{$user->faqid}}" title="Mark as Verified" class="operation"><span class="glyphicon glyphicon-ok-circle"></span></a>
                </td>
              </tr>
            @endforeach
          </table>
          <?php echo $getuser->links(); ?>
        </div>