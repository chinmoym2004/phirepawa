<div class="">
	<div class="col-md-10" id="allBlog">
			<div class="blog-post">
				@if(count($blog)==0)
					U have not posted anything
				@else
					@foreach ($blog as $content)
						<div class="post-item" id="article-3">
							<div class="caption wrapper-lg">

			                    <h2 class="post-title">
			                    	<a href="{{url('blog/display/'.$content->postid)}}">
			                    		{{$content->title}}
			                    	</a>
			                    	@if($content->verified==1)
									<!-- glyphicon glyphicon-share -->
										<span class="" title="Verified" style="font-size:14px"><i class="glyphicon glyphicon-ok-circle"></i></span>
									@else
										<span class="" title="Still Not Verified" style="font-size:14px"><i class="glyphicon glyphicon-info-sign"></i></span>
				                    @endif
			                    </h2>
			                    <div class="post-sum">
			                		 {{$content->body}}
			                    </div>
			                    <div class="line line-lg"></div>
			                    <div class="text-muted">
			                      <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">{{$content->firstname.' '.$content->lastname}}</a>
			                      <i class="fa fa-clock-o icon-muted"></i> {{$content->updated_at}}                 <!-- <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 2 comments</a> -->
			                    </div>
			                  </div>
			            </div>	
			        @endforeach
			    @endif
			</div>
<div align="center">
	<ul class="pagination">
			  <!--<li class="previous"><a href="#">&larr; Older</a></li>
	  <li class="next"><a href="#">Newer &rarr;</a></li>-->
	</ul>
</div>
	</div>
</div>