<!DOCTYPE html>
<html>
<head>
<title>magExpress</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{Request::root()}}/main/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="{{Request::root()}}/main/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{Request::root()}}/main/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="{{Request::root()}}/main/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="{{Request::root()}}/main/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="{{Request::root()}}/main/assets/css/style.css">
<!--[if lt IE 9]>
<script src="{{Request::root()}}/main/assets/js/html5shiv.min.js"></script>
<script src="{{Request::root()}}/main/assets/js/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container-fluid">
  <header id="header">
    <div class="row">
      <div class="col-lg-11 col-lg-offset-1 col-md-11 col-md-offset-1">
        <div class="header_bottom">
          <div class="header_bottom_left"><a class="logo" href="index.html"><strong>JATO</strong> <span>Joutnalists Against Turtore</span></a></div>
          <div class="header_bottom_right"></div>
        </div>
      </div>
    </div>
  </header>
  <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">
            <li class=""><a href="{{ action("PostsController@index") }}">Home</a></li>
            <li class=""><a href="{{ action("CatagoriesController@about") }}">About us</a></li>
            <li class=""><a href="{{ action("CatagoriesController@campaigns") }}">Campaigns</a></li>
            <li class="dropdown"> <a href="{{ action("CatagoriesController@releases") }}" class="" data-toggle="dropdown" role="button" aria-expanded="false">Releases</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ action("CatagoriesController@releases") }}">Press Releases</a></li>
                <li><a href="{{ action("CatagoriesController@newsletters") }}">Weekly Newsletters</a></li>
                <li><a href="{{ action("CatagoriesController@reports") }}">Reports</a></li>
              </ul>
            </li>
            <li><a href="{{ action("CatagoriesController@articles") }}">Articles</a></li>
            <li><a href="{{ action("CatagoriesController@files") }}">Files</a></li>
            <li><a href="{{ action("CatagoriesController@legalsupport") }}">Legal Support</a></li>
            <li><a href="{{ action("CatagoriesController@contact") }}">Contact us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

    
    @yield('content')

<footer id="footer">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInLeft">
            <h2>Flicker Images</h2>
            <ul class="flicker_nav">
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
              <li><a href="#"><img src="{{Request::root()}}/main/images/75x75.jpg" alt=""></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInDown">
            <h2>Labels</h2>
            <ul class="labels_nav">
            <li><a href="{{ action("CatagoriesController@campaigns") }}">Campaigns</a></li>
            <li> <a href="{{ action("CatagoriesController@releases") }}">Releases</a></li>
            <li><a href="{{ action("CatagoriesController@releases") }}">Press Releases</a></li>
            <li><a href="{{ action("CatagoriesController@newsletters") }}">Weekly Newsletters</a></li>
            <li><a href="{{ action("CatagoriesController@reports") }}">Reports</a></li>
            <li><a href="{{ action("CatagoriesController@articles") }}">Articles</a></li>
            <li><a href="{{ action("CatagoriesController@files") }}">Files</a></li>
            <li><a href="{{ action("CatagoriesController@legalsupport") }}">Legal Support</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="single_footer_top wow fadeInRight">
            <h2>About Us</h2>
            <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nec laoreet orci, eget ullamcorper quam. Phasellus lorem neque, </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_left">
            <p>Copyright &copy; 2016 <a href="{{ action("PostsController@index") }}">JATO</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="footer_bottom_right">
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="{{Request::root()}}/main/assets/js/jquery.min.js"></script> 
<script src="{{Request::root()}}/main/assets/js/bootstrap.min.js"></script> 
<script src="{{Request::root()}}/main/assets/js/wow.min.js"></script> 
<script src="{{Request::root()}}/main/assets/js/slick.min.js"></script> 
<script src="{{Request::root()}}/main/assets/js/custom.js"></script>
</body>
</html>