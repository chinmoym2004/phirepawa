<div>
	@if($operation=='new') 
	{{ Form::open(array('url'=>'forum/create', 'role'=>'form')) }}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Toics</label>
	    <input type="text" class="form-control" name="forumTopics" placeholder="Enter a title">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Description</label>
	    <textarea class="form-control" rows="10" name="description"></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	@endif
</div>
<div>
	@if ($operation=='update')
	@foreach ($faq as $content)
	{{ Form::open(array('url'=>'forum/create', 'role'=>'form')) }}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Toics</label>
	    <input type="text" class="form-control" name="forumTopics" placeholder="Enter a title">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Description</label>
	    <textarea class="form-control" rows="10" name="description"></textarea>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	@endif
</div>