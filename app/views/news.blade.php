@foreach($getallnews as $news)
	<div>
		{{$news->news}}
		{{$news->newsdesc}}
		{{$news->news_date}}
		<a href="{{url('fullnews?forwhich='.base64_encode($news->id))}}">More...</a>
	</div>
@endforeach
<?php echo $getallnews->links(); ?>