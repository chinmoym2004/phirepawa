<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <link rel="shortcut icon" href="{{URL::asset('assets_files/img/favicon.ico')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{URL::asset('assets_files/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets_files/css/main.css')}}" rel="stylesheet">
    <!--CSS -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <!--header -->
    <div id="header">

      <a href="{{url('/')}}"><img src="{{url::asset('assets_files/img/logo.png')}}" alt="phirepawa" id="logo" /></a>
      <div class="pull-right">
          <a href="#registration"><span>Registration</span></a>
          <a href="#login"><span>Login</span></a>
      </div>       
    </div>
    <!--Menu Area -->
      <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{url('/')}}">Home</a></li>
          
          @if(Auth::check())
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">My Profile</a></li>
            <li><a href="{{url('blog/allcontent')}}">My Content</a></li>
            <li><a href="#">Setting</a></li>
            <li class="divider"></li>
            <li><a href="{{url('users/logout')}}">Logout</a></li>
          </ul>
          </li>
          @else
            <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi Guest<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
            <li><a href="#" data-toggle="modal" data-target="#signupModal">Signup</a></li>
          </ul>
          </li>
          @endif
        </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </div>


    <div class="container">
        {{$content}}

    </div>
    
    <div id="outer_footer">
    <div id="footer">
      <div id="left_footer">
        <ul>
          <li>
            <h2><cufon class="cufon cufon-canvas" alt="About " style="width: 47px; height: 14px;"><canvas width="66" height="17" style="width: 66px; height: 17px; top: -3px; left: -2px;"></canvas><cufontext>About </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 19px; height: 14px;"><canvas width="35" height="17" style="width: 35px; height: 17px; top: -3px; left: -2px;"></canvas><cufontext>Us</cufontext></cufon></h2>
            <ul>
              <li><a href="http://localhost/phirepawa/home">Home</a></li>
              <li><a href="http://localhost/phirepawa/about-us">About Us</a></li>
              <li><a href="http://localhost/phirepawa/faq">Faq</a></li>
                </ul>
          </li>
          <li>
            <h2><cufon class="cufon cufon-canvas" alt="Academia" style="width: 70px; height: 14px;"><canvas width="86" height="17" style="width: 86px; height: 17px; top: -3px; left: -2px;"></canvas><cufontext>Academia</cufontext></cufon></h2>
            <ul>              
              <li><a href="http://localhost/phirepawa/news-details">News and Event</a></li>
              <li><a href="http://localhost/phirepawa/gallery">Photo Gallery</a></li>
        <li><a href="http://localhost/phirepawa/forum">Discussion Forum</a></li>
              <li><a href="http://localhost/phirepawa/blog">Blog</a></li>
            </ul>
          </li>
          <li>
            <h2><cufon class="cufon cufon-canvas" alt="Contact " style="width: 60px; height: 14px;"><canvas width="79" height="17" style="width: 79px; height: 17px; top: -3px; left: -2px;"></canvas><cufontext>Contact </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 19px; height: 14px;"><canvas width="35" height="17" style="width: 35px; height: 17px; top: -3px; left: -2px;"></canvas><cufontext>Us</cufontext></cufon></h2>
            <ul>
              <li><a href="http://localhost/phirepawa/contactus">Contact Us</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <div id="right_footer">
        <div class="tweetbox">
          <div class="left_tweet">
            <p><a href="http://www.phirepawa.com"><strong>Phire Pawa </strong></a> 
            </p>
            <p>css</p>
            <em class="shoutright">&nbsp;</em> </div>
        </div>
        <div class="bottom_links">
          <div class="left_links">
            <ul>
              <li>
                <h3><cufon class="cufon cufon-canvas" alt="Follow " style="width: 45px; height: 12px;"><canvas width="62" height="15" style="width: 62px; height: 15px; top: -2px; left: -2px;"></canvas><cufontext>Follow </cufontext></cufon><cufon class="cufon cufon-canvas" alt="Us" style="width: 17px; height: 12px;"><canvas width="30" height="15" style="width: 30px; height: 15px; top: -2px; left: -2px;"></canvas><cufontext>Us</cufontext></cufon></h3>
              </li>
              <li><a href="http://www.facbook.com" target="_blank"><img src="http://localhost/phirepawa/images/img-fb.png" alt=""></a></li>
              <li><a href="http://www.twitter.com" target="_blank"><img src="http://localhost/phirepawa/images/img-tw.png" alt=""></a></li>
              <li><a href="http://www.youtube.com" target="_blank"><img src="http://localhost/phirepawa/images/img-dg.png" alt=""></a></li>
              <li><a href="http://www.youtube.com" target="_blank"><img src="http://localhost/phirepawa/images/img-ut.png" alt=""></a></li>
            </ul>
          </div>
          <div class="right_links">
            <h3><cufon class="cufon cufon-canvas" alt="Call: " style="width: 30px; height: 11px;"><canvas width="45" height="14" style="width: 45px; height: 14px; top: -2px; left: -2px;"></canvas><cufontext>Call: </cufontext></cufon><cufon class="cufon cufon-canvas" alt="9749689171" style="width: 69px; height: 11px;"><canvas width="81" height="14" style="width: 81px; height: 14px; top: -2px; left: -2px;"></canvas><cufontext>9749689171</cufontext></cufon></h3>
          </div>
        </div>
      </div>
      <div class="bottom_footer">
        <p>© 2012- Phirepawa College Site All Rights Reserved</p>
        <a href="#" id="topScroll">Back to Top</a> </div>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('assets_files/js/jquery-1.10.1.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('assets_files/js/bootstrap.min.js')}}"></script>
    <!--Js -->
    <script type="text/javascript" src="{{URL::asset('assets_files/js/cufon-yui.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets_files/js/swiss.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets_files/js/hoverIntent.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets_files/js/functions.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets_files/js/jquery.colorbox.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets_files/js/jquery-1.7.1.min.js')}}"></script>
  </body>
</html>