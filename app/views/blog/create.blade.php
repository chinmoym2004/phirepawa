<div>
	@if($operation=='new') 
	{{ Form::open(array('url'=>'blog/create', 'role'=>'form')) }}
	  <div class="form-group">
	    <label for="title">Blog Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title">
	  </div>
	  <div class="form-group">
	    <label for="body">Content</label>
	    <textarea class="form-control" rows="10" name="body" id="body"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="tags">Tags</label>
	    <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter more than one tag by comman(,)">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
	@endif
</div>
<div>
	@if ($operation=='update') 
	@foreach ($blog as $content)
	{{ Form::open(array('url'=>'blog/update/'.$content->id, 'role'=>'form')) }}
	  <div class="form-group">
	    <label for="title">Blog Title</label>
	    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title" value="{{$content->title}}">  
	  </div>
	  <div class="form-group">
	    <label for="body">Content</label>
	    <textarea class="form-control" rows="10" name="body" id="body">{{$content->body}}</textarea>
	  </div>
	  <div class="form-group">
	    <label for="tags">Tags</label>
	    <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter more than one tag by comman(,)" value="{{$content->tags}}">
	  </div>
	  <button type="submit" class="btn btn-default">Update</button>
	</form>
	@endforeach
	@endif
</div>