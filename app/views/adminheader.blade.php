<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="{{URL::asset('assets_files/images/favicon.ico')}}" type="image/x-icon">
<title>PHIRE PAWA::Home</title>

	<!--CSS -->
	<link href="{{URL::asset('assets_files/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	
</head>
<body>
	<div class="container headerclass">
			<div class="col-sm-3 pull-left">
				<a href="{{URL('admin')}}"><img src="{{URL::asset('assets_files/images/logo.png')}}" alt="lara_phirepawa/assets_files" id="logo" /></a>
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
		            <li>
		            	<a href="{{url('myprofile')}}"><span>Welcome <b>{{Auth::user()->firstname}}</b></span>
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
				        <li class="active">
				        	<a href="{{url('admin/dashboard')}}" >
				        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Dashboard
				        	</a>
				        </li>
				        <li class="dropdown">
			        		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			        			<i class="glyphicon glyphicon-edit"></i>&nbsp;&nbsp;Blog<b class="caret"></b></a>
			              	<ul class="dropdown-menu">
			                	<li class="">
						        	<a href="{{url('admin/showallpost')}}">Approved Content
						        	</a>
						        </li>
				                <li class="">
						        	<a href="{{url('admin/allnewlyblog')}}">Newly Arrievd
						        	</a>
						        </li>
			              	</ul>
			            </li>
			            <li class="dropdown">
			        		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			        			<i class="glyphicon glyphicon-question-sign"></i>&nbsp;&nbsp;Faq<b class="caret"></b></a>
			              	<ul class="dropdown-menu">
			                	<li class="">
						        	<a href="{{url('admin/showallfaq')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Approved Content
						        	</a>
						        </li>
				                <li class="">
						        	<a href="{{url('admin/allnewlyfaq')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Newly Arrievd
						        	</a>
						        </li>
			              	</ul>
			            </li>
			            <li class="dropdown">
			        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-briefcase"></i>&nbsp;&nbsp;Forum<b class="caret"></b></a>
			              	<ul class="dropdown-menu">
			                	<li class="">
						        	<a href="{{url('admin/approvrd topics')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Approved Content
						        	</a>
						        </li>
				                <li class="">
						        	<a href="{{url('admin/newtopics')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Newly Arrievd
						        	</a>
						        </li>
			              	</ul>
			            </li>
			           <li class="dropdown">
			        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i>&nbsp;&nbsp; Comments<b class="caret"></b></a>
			              	<ul class="dropdown-menu">
			                	<li class="">
						        	<a href="{{url('admin/dashboard')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Approved Content
						        	</a>
						        </li>
				                <li class="">
						        	<a href="{{url('admin/dashboard')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Newly Arrievd
						        	</a>
						        </li>
			              	</ul>
			            </li>
			            <li class="dropdown">
			        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;User<b class="caret"></b></a>
			              	<ul class="dropdown-menu">
			                	<li class="">
						        	<a href="{{url('admin/useradmin')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Admin
						        	</a>
						        </li>
				                <li class="">
						        	<a href="{{url('admin/usercommon')}}">
						        		<i class="glyphicon glyphicon-dashboard"></i>&nbsp;&nbsp;Common
						        	</a>
						        </li>
			              	</ul>
			            </li>
			            <li><a href="{{url('admin/events')}}"><i class="glyphicon glyphicon-calendar"></i>&nbsp;&nbsp;Events</a></li>
			            <li><a href="{{url('admin/news')}}"><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;News</a></li>
	  					<li><a href="{{url('admin/gallery')}}"><i class="glyphicon glyphicon-picture"></i>&nbsp;&nbsp;Gallery</a></li>
						<li><a href="{{url('admin/siteinfo')}}"><i class="glyphicon glyphicon-globe"></i>&nbsp;&nbsp;Siteinfo</a></li>
			          </ul>
			        </div><!--/.nav-collapse -->
	</div>