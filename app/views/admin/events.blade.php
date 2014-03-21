 <h4>All Events</h4>
        <div class="table-responsive">
          <table class="table">
            <tr>
              <th class="">Title</td>
              <th class="">Description</td>
              <th class="">Createby</td>
              <th class="">Event Date</td>
              <th class="">Operation</td>
            </tr>
            @foreach($getallevents as $event)
              <tr>
                <td>{{$event->event_title}}</td>
                <td>{{$event->event_desc}}</td>
                <td>Admin</td>
                <td>{{$event->event_date}}</td>
                <td>
                  <a href="#" data-id="{{$event->id}}" title="Delete This Post" class="operation"><span class="glyphicon glyphicon-remove-circle"></span></a>
                  <a href="#" data-id="{{$event->id}}" title="Mark as Verified" class="operation"><span class="glyphicon glyphicon-ok-circle"></span></a>
                </td>
              </tr>
            @endforeach
          </table>
          <?php echo $getallevents->links(); ?>
        </div>