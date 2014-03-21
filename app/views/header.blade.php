<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="{{URL::asset('assets_files/images/favicon.ico')}}" type="image/x-icon">
<title>PHIRE PAWA::Home</title>

	<!--CSS -->
	<link href="{{URL::asset('assets_files/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<!-- 	<link href="{{URL::asset('assets_files/css/orbit-1.2.3.css')}}" rel="stylesheet" type="text/css" />
 -->	<link href="{{URL::asset('assets_files/css/alertify.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="http://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link href="{{URL::asset('assets_files/css/bootstrap-image-gallery.css')}}" rel="stylesheet" type="text/css" />

</head>
<body>
	<div class="container headerclass">
			<div class="col-sm-3 pull-left">
				<a href="{{URL('/')}}"><img src="{{URL::asset('assets_files/images/logo.png')}}" alt="lara_phirepawa/assets_files" id="logo" /></a>
			</div>
			<div class="col-sm-5 pull-right" id="cornerReg" style="margin-right: -54px;">
				@if (!Auth::check())
				<ul>
		            <li>
		            	<a href="#" data-toggle="modal" data-target="#registrationModal"><span>Registration</span>
		            		</a>
		            </li>
		            <li>
		            	<a href="#" data-toggle="modal" data-target="#loginModal"><span>Batch Coordinators</span>
		            	</a>
		           	</li>
		            <li>
		            	<a href="#" data-toggle="modal" data-target="#loginModal"><span>Login</span>
		            	</a>
		           	</li>
		           	            
		          </ul>
		         @else
		         	<ul>
		         	@if(Auth::user()->usertype=='admin')
			         	<li>
			            	<a href="{{url('admin')}}" target="_blank"><span>Admin panel</span>
			            		</a>
			            </li>
		            @endif
		            <li>
		            	<a href="{{url('myprofile')}}"><span>My Profile</span>
		            		</a>
		            </li>
		            <li>
		            	<a href="#"><span>Batch Coordinators</span>
		            	</a>
		           	</li>
		            <li>
		            	<a href="{{url('users/logout')}}"><span>Logout</span>
		            	</a>
		           	</li>
		           	            
		          </ul>
		        @endif

			</div>
	</div>
	<div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        </div>
			        <div class="navbar-collapse collapse" id="navigation">
			          <ul class="nav navbar-nav">
				        <li class="active"><a href="{{url('/')}}"><i class="glyphicon glyphicon-home">&nbsp;</i>Home</a></li>
				        <li><a href="{{url('aboutus')}}"><i class="glyphicon glyphicon-home">&nbsp;</i>About Us</a></li>				            
				        <li class="dropdown">
				        	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-home">&nbsp;</i>Alumni Corner<b class="caret"></b></a>
				              <ul class="dropdown-menu">
				                <li><a href="#">Action</a></li>
				                <li><a href="#">Another action</a></li>
				                <li><a href="#">Something else here</a></li>
				                <li class="divider"></li>
				                <li class="dropdown-header">Nav header</li>
				                <li><a href="#">Separated link</a></li>
				                <li><a href="#">One more separated link</a></li>
				              </ul>
				            </li>
	  					<li><a href="{{url('gallery')}}"><i class="glyphicon glyphicon-picture">&nbsp;</i>Gallery</a></li>
						<li><a href="{{url('blog')}}"><i class="glyphicon glyphicon-book">&nbsp;</i>Blog</a></li>
						<li><a href="{{url('faq')}}"><i class="glyphicon glyphicon-question-sign">&nbsp;</i>FAQ</a></li>
						<li><a href="{{url('news')}}"><i class="glyphicon glyphicon-home">&nbsp;</i>News</a></li>
						<li><a href="{{url('forum')}}"><i class="glyphicon glyphicon-home">&nbsp;</i>Forum</a></li>
						<li><a href="{{url('contactus')}}"><i class="glyphicon glyphicon-link">&nbsp;</i>Contact US</a></li> 
			          </ul>
			        </div><!--/.nav-collapse -->
	</div>
	<div class="container">
		<!-- <div style="width: 100%; height: 242px;">
			<div id="slide">
			</div>
		</div> -->
		<div id='coin-slider'>
			<a href="img01_url" target="_blank">
				<img src="{{URL::asset('assets_files/images/slider1.jpg')}}" alt="Overflow: Hidden No More" />
				<!-- <span>
					Description for img01
				</span> -->
			</a>
			<a href="img01_url" target="_blank">
				<img src="{{URL::asset('assets_files/images/slider3.jpg')}}" alt="Overflow: Hidden No More" />
				<!-- <span>
					Description for img01
				</span> -->
			</a>
			<a href="img01_url" target="_blank">
				<img src="{{URL::asset('assets_files/images/slider4.jpg')}}" alt="Overflow: Hidden No More" />
				<!-- <span>
					Description for img01
				</span> -->
			</a>
			<a href="img01_url" target="_blank">
				<img src="{{URL::asset('assets_files/images/slider5.jpg')}}" alt="Overflow: Hidden No More" />
				<!-- <span>
					Description for img01
				</span> -->
			</a>
		</div>
	</div>