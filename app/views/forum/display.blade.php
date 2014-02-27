@if(count($forum))
	@foreach($forum as $content)
	<div class="caption wrapper-lg">
		<h2 class="post-title">
			<a href="#">{{$content->topics}}</a>
			@if($content->verified==1)
			<!-- glyphicon glyphicon-share -->
				<span class="" title="Verified" style="font-size:14px"><i class="glyphicon glyphicon-ok-circle"></i></span>
			@else
				<span class="" title="Still Not Verified" style="font-size:14px"><i class="glyphicon glyphicon-info-sign"></i></span>
            @endif
		</h2>
		<div class="post-sum">
		  <p>{{$content->desc}}</p>
		</div>
		<div class="line line-lg"></div>
		<div class="text-muted">
		  <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">{{$content->firstname.' '.$content->lastname}}</a>
		  <i class="fa fa-clock-o icon-muted"></i> {{$content->updated_at}}
		</div>
	</div>
	@endforeach

	<div class="comment-list block">
		@if(count($getallcomment)==0)
			<p>Still no comment is there</p>
		@endif
		@foreach ($getallcomment as $key) 
			<article id="comment-id-1" class="comment-item">
			  <a class="pull-left thumb-sm">
			    <img src="images/avatar.jpg" class="img-rounded">
			  </a>
			  <section class="comment-body m-b">
			    <header>
			      <a href="#"><strong>{{$key->firstname.' '.$key->lastname}}</strong></a>
			      <span class="text-muted text-xs block m-t-xs">
			        {{$key->commenton}}
			      </span>
			    </header>
			    <div class="m-t-sm">{{$key->combody}}</div>
			  </section>
			</article>
		@endforeach
	</div>

	<h4 class="m-t-lg m-b">Leave a comment</h4>

	@if(Auth::check())
	<form action="{{url('commment/postit')}}" method="post" data-postid="{{$postid}}" id="postComment" data-context="faq">
	    <div class="form-group">
	      <label>Comment</label>
	      <textarea class="form-control" rows="5" placeholder="Type your comment"  id="postcomment"></textarea>
	    </div>
	    <div class="form-group">
	      <button type="submit" class="btn btn-success">Post comment</button>
	    </div>
	</form>
	@else
		<button type="submit" class="btn btn-success">Login to post a comment</button>
	@endif
@else
	there is no faq yet
@endif