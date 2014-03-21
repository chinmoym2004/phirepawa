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
            @foreach($getallnews as $news)
              <tr>
                <td>{{$news->news}}</td>
                <td>{{$news->newsdesc}}</td>
                <td>Admin</td>
                <td>{{$news->news_date}}</td>
                <td>
                  <a href="#" data-id="{{$news->id}}" title="Delete This Post" class="operation"><span class="glyphicon glyphicon-remove-circle"></span></a>
                  <a href="#" data-id="{{$news->id}}" title="Mark as Verified" class="operation"><span class="glyphicon glyphicon-ok-circle"></span></a>
                </td>
              </tr>
            @endforeach
          </table>
          <?php echo $getallnews->links(); ?>
        </div>