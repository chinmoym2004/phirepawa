@foreach($blog as $content)
	{{$content->title}}
	{{$content->body}}
	{{$content->tags}}
@endforeach