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
                            <input type="email" class="form-control" placeholder="Email" required name="email">
                            <span class="help-block m-b-none">Example block-level help text here.</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-10">
                            <input type="password" class="form-control" placeholder="Password" name="password">
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
                            <button type="submit" class="btn btn-sm btn-default">Sign in</button>&nbsp;&nbsp;&nbsp;{{ HTML::link('password/reset', 'Forgot Password?') }}
                          </div>
                          <div></div>
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
            <b>User registration</b>
            <div class="close" data-dismiss="modal" aria-hidden="true"></div>
            <span class="ecs_tooltip"><span class="arrow"></span></span>
      </div>
      <div class="modal-body">
           <form class="form-horizontal" role="form" method="post" action="{{url('users/create')}}">
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-6">
              <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">First Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="First name" name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Last Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="Last Name" name="lastname">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Registration no</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" placeholder="Registartion no" name="regno" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Select Year</label>
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
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-3 control-label">Re-Password</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" placeholder="re-Password" name="password_confirmation" autocomplete="off">
            </div>
          </div>
          <!-- <div class="form-group">
              <label class="col-sm-3 control-label">User Type</label>
              <div class="col-sm-4">
                <select class="form-control" name="usertype">
                  <option value="common">Common</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
          </div> -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4">
              <button type="submit" class="btn btn-default">Create User</button>
            </div>
          </div>
        </form>
        <!-- <form method="POST" action="{{url('users/create')}}" accept-charset="UTF-8" class="form-signin" role="form" id="userCreate">
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
          {{ Form::close() }} -->            
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!--modals end-->