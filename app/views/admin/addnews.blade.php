<div>
	@if($operation=='new') 
	 	<form action="{{url('admin/createnews')}}" method="post" role="form" >
		  <div class="form-group">
		    <label for="title">News Heading</label>
		    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
		  </div>
		  <div class="form-group">
		    <label for="body">News description</label>
		    <textarea class="form-control" rows="10" name="body" id="body"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="tags">News date</label>
		    <input type="text" class="form-control" id="newsdate" name="newsdate" placeholder="select a date">
		  </div>
		  <button type="submit" class="btn btn-default">Publish</button>
		</form>
	@else if($operation=='update')
		<form action="{{url('admin/update/')}}" method="post" role="form" >
		  <div class="form-group">
		    <label for="title">News Heading</label>
		    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
		  </div>
		  <div class="form-group">
		    <label for="body">News description</label>
		    <textarea class="form-control" rows="10" name="body" id="body"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="tags">News date</label>
		    <input type="text" class="form-control" id="newsdate" name="newsdate" placeholder="select a date">
		  </div>
		  <button type="submit" class="btn btn-default">Publish</button>
		</form>
	@endif
</div>