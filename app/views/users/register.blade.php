  <div class="col-sm-6" style="padding-bottom:30px">
    <form method="POST" action="{{url('users/create')}}" accept-charset="UTF-8" class="form-signin" role="form" id="userCreate">
	   <h2 class="form-signin-heading">Signup</h2>
	 	{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name','required','value'=>'','id'=>'firstname')) }}<br/>
	 	{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name','required','value'=>'','id'=>'lastname')) }}<br/>
	   	{{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address','required','value'=>'','id'=>'emailid')) }}<br/>
	   	{{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password','required','value'=>'','id'=>'password')) }}<br/>
	   	{{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Re-password','required','value'=>'','id'=>'password_confirmation')) }}<br/>
	 
	    <div class="control-group">
			<div class="controls">
				<div>
					{{ Form::submit('Signup', array('class'=>'btn btn-primary'))}}
				</div>				
			</div>
		</div>
	{{ Form::close() }}
</div>