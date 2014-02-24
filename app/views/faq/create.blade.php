<div>
	@if ( $operation=='new')
	{{ Form::open(array('url'=>'faq/create', 'role'=>'form')) }}
		<h5>Ask a Question</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Question Title</label>
	    <input type="text" class="form-control" id="" placeholder="Enter a title" name="faq_title">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Desription</label>
	    <textarea class="form-control" rows="10" name="faq_desc"></textarea>
	  </div>
	  <!-- <div class="form-group">
	    <label for="exampleInputFile">File input</label>
	    <input type="file" id="exampleInputFile">
	    <p class="help-block">one image (if any)</p>
	  </div>
	  <div class="checkbox">
	    <label>
	      <input type="checkbox"> Check me out
	    </label>
	  </div> -->
	  <button type="submit" class="btn btn-default">Post</button>
	</form>
	@endif
</div>

<div>
	@if ($operation=='update')
	@foreach ($faq as $content)
	{{ Form::open(array('url'=>'faq/create'.$content->id, 'role'=>'form')) }}
		<h5>Ask a Question</h5>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Question Title</label>
	    <input type="text" class="form-control" id="" placeholder="Enter a title" name="faq_title" value="{{$content->title}}">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Desription</label>
	    <textarea class="form-control" rows="10" name="faq_desc">{{$content->body}}</textarea>
	  </div>
	 @endforeach
	  <button type="submit" class="btn btn-default">Update Question</button>
	</form>
	@endif
</div>