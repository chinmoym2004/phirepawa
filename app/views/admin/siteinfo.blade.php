<h2 id="less-bootstrap">About us</h2>
<span class="glyphicon glyphicon-pencil pull-right" style="
    margin: 10px;
    font-size: 20px;
    cursor: pointer;
" id="editme" title="Edit this"></span>
<p id="about">{{$about}}</p>

<div id="showAboutus">
	<form action="{{url('admin/aboutus')}}" method="post" role="form">
		<div class="form-group">
			<input type="hidden" value="{{$id}}" name="aboutid">
			<textarea class="form-control" rows="10" name="saveAboutus" id="saveAboutus"></textarea>
		</div>
		<button type="submit">Update</button>
		<button type="reset" id="clear">cancle</button>
	</form>
</div>