<div>
	@if($operation=='new') 
	{{ Form::open(array('url'=>'admin/createevent', 'role'=>'form')) }}
	  <div class="form-group">
	    <label for="title">Event Name</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
	  </div>
	  <div class="form-group">
	    <label for="body">Event description</label>
	    <textarea class="form-control" rows="10" name="body" id="body"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="tags">Event date</label>
	    <input type="text" class="form-control" id="eventsdate" name="eventsdate" placeholder="select a date">
	  </div>
	  <button type="submit" class="btn btn-default">Publish</button>
	</form>
	@else if($operation=='update')
		{{ Form::open(array('url'=>'admin/createevent', 'role'=>'form')) }}
		  <div class="form-group">
		    <label for="title">Event Name</label>
		    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
		  </div>
		  <div class="form-group">
		    <label for="body">Event description</label>
		    <textarea class="form-control" rows="10" name="body" id="body"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="tags">Event date</label>
		    <input type="text" class="form-control" id="eventsdate" name="eventsdate" placeholder="select a date">
		  </div>
		  <button type="submit" class="btn btn-default">Publish</button>
		</form>
	@endif
</div>