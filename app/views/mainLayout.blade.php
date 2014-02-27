@include('header')
@if(Session::has('message'))
    <div class="container alert">{{ Session::get('message') }}</div>
  @endif
<div class="container" style="min-height:300px">
      {{$content}}
</div>
@include('footer')
@include('allmodal')