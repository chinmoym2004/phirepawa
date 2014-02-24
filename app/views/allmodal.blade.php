<!--All Modals -->

<!-- login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <div class="close" data-dismiss="modal" aria-hidden="true"></div>
            <span class="ecs_tooltip"><span class="arrow"></span></span>

      </div>
      <div class="modal-body">
        <form method="POST" action="{{url('users/signin')}}" accept-charset="UTF-8" class="bs-example form-horizontal" role="form" id="userLogin">
                        Login
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="email" class="form-control" placeholder="Email" required>
                            <span class="help-block m-b-none">Example block-level help text here.</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-10">
                            <input type="password" class="form-control" placeholder="Password">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox" name="remember"> Remember me
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-default">Sign in</button>
                          </div>
                          <div>{{ Form::submit('Login', array('class'=>'btn btn-primary'))}}&nbsp;&nbsp;&nbsp;{{ HTML::link('password/reset', 'Forgot Password?') }}</div>
                        </div>
                      </form>
      </div>
      <div class="modal-footer">
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--Registration modal-->
  <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
            <div class="close" data-dismiss="modal" aria-hidden="true"></div>
            <span class="ecs_tooltip"><span class="arrow"></span></span>

      </div>
      <div class="modal-body">
            <form method="POST" action="{{url('users/create')}}" accept-charset="UTF-8" class="form-signin" role="form" id="userCreate">
             <h2 class="form-signin-heading">Signup</h2>
            {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name','required','value'=>'','id'=>'firstname')) }}<br/>
            {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name','required','value'=>'','id'=>'lastname')) }}<br/>
              {{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address','required','value'=>'','id'=>'emailid')) }}<br/>
              {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password','required','value'=>'','id'=>'password')) }}<br/>
           
              <div class="control-group">
                <div class="controls">
                  <div>{{ Form::submit('Signup', array('class'=>'btn btn-primary'))}}</div>
                </div>
              </div>
          {{ Form::close() }}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--modals end-->