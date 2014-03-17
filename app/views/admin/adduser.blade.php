@if($auth)
<div class="col-sm-8">
	<form class="form-horizontal" role="form" method="post" action="{{url('admin/adduser')}}">
	  @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
	  <div class="form-group">
	    <label for="" class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-6">
	      <input type="email" class="form-control" placeholder="Email" name="email">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="" class="col-sm-2 control-label">First Name</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  placeholder="First name" name="firstname">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="" class="col-sm-2 control-label">Last Name</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  placeholder="Last Name" name="lastname">
	    </div>
	  </div>
	 <!--  <div class="form-group">
	    <label for="" class="col-sm-2 control-label">Registration no</label>
	    <div class="col-sm-6">
	      <input type="text" class="form-control"  placeholder="Registartion no" name="regno" autocomplete="off">
	    </div>
	  </div> -->
	  <!-- <div class="form-group">
	    <label for="" class="col-sm-2 control-label">Select Year</label>
	    <div class="col-sm-3">
		      <select class="form-control" name="useryear">
		        <option value="2014">2014</option>
		        <option value="2013">2013</option>
		        <option value="2012">2012</option>
		        <option value="2011">2011</option>
		        <option value="2010">2010</option>
		        <option value="2009">2009</option>
		        <option value="2008">2008</option>
		        <option value="2007">2007</option>
		        <option value="2006">2006</option>
		        <option value="2005">2005</option>
		        <option value="2004">2004</option>
		        <option value="2003">2003</option>
		      </select>
	    </div>
	  </div> -->
	  <div class="form-group">
	    <label for="" class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-6">
	      <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="" class="col-sm-2 control-label">Re-Password</label>
	    <div class="col-sm-6">
	      <input type="password" class="form-control" placeholder="re-Password" name="password_confirmation" autocomplete="off">
	    </div>
	  </div>
	  <div class="form-group">
	      <label class="col-sm-2 control-label">User Type</label>
	      <div class="col-sm-4">
		      <select class="form-control" name="usertype">
		        <option value="common">Common</option>
		        <option value="admin">Admin</option>
		      </select>
	      </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-4">
	      <button type="submit" class="btn btn-default">Create User</button>
	    </div>
	  </div>
	</form>
</div>
@else
	Sorry ! you need to be super user to add user.
@endif