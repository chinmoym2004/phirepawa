
	<h2>About Us</h2>
	@foreach ($getAbout as $value)
	<p>
		{{$value->about}}
	</p>
	@endforeach