 <h4>All News</h4>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th class="">Title</td>
              <th class="">Description</td>
              <th class="">Createby</td>
              <th class="">Posted no</td>
              <th class="">Operation</td>
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