<div>
<form class="form-horizontal" role="form" methd="post" action="{{url('admin/uploadimage')}}" >
  <div class="form-group">
    <label for="file" class="col-sm-2 control-label">Select a file</label>
    <div class="col-sm-5">
      <input type="file" id="file" name="file" placeholder="Select an image title">
    </div>
  </div>
  <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter an image title">
    </div>
  </div>
  <div class="form-group">
    <label for="desc" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-5">
      <textarea class="form-control" id="desc" name="desc" placeholder="Enter an image description" cols=10 rows=7></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="eventdate" class="col-sm-2 control-label">Select Date of Event</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="eventdate" name="eventdate" placeholder="Enter an image event date">
    </div>
  </div>
  <div class="form-group">
    <label for="eventdate" class="col-sm-2 control-label"></label>
    <div class="col-sm-5">
      <button type="submit" class="btn btn-sucess">Submit</button>
    </div>
  </div>
   
</form>
</div>