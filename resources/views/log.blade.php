<!DOCTYPE html>
<html lang="en">

<head>
    <title>Meeting</title>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css')}}">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css')}}"></link>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"></link>

    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('css/templatemo-digital-trend.css') }}">
  </head>

  <body>
     <!-- Pre-loader start -->
     <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->




	<!-- Javascript -->          
	<script src="plugins/popper.min.js"></script>
	<script src="plugins/bootstrap/js/bootstrap.min.js"></script>  
	<script src="plugins/smoothscroll.min.js"></script>
	<script src="plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
	<script src="js/main.js"></script>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800|Roboto:300,400,700&display=swap" rel="stylesheet">
	
	<!-- FontAwesome JS-->
	<script defer src="js/all.min.js"></script>

	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="css/theme.css">

<header id="header" class="header fixed-top bg-primary">	    
		<div class="branding">
			<div class="container-fluid">
				<nav class="main-nav navbar navbar-expand-lg">
					<!-- <div class="site-logo"><a class="scrollto" href="#hero-block"><img class="logo-icon" src="images/logo.jpg"  alt="logo"></a></div>     -->
					
					<div class="navbar-btn order-lg-2"><a class="btn btn-secondary" href="/webinar" target="_blank">Web4You</a></div>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div id="navigation" class="navbar-collapse collapse  justify-content-lg-end me-lg-3">
						<ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link scrollto" href="/">Accueil</a></li>                                              
							<li class="nav-item"><a class="nav-link scrollto" href="/about">About</a></li>                                              
							<li class="nav-item"><a class="nav-link scrollto" href="/reg">Register</a></li>
							<li class="nav-item"><a class="nav-link scrollto" style="color:black" href="/log">Login</a></li>
                            <li class="nav-item"><a class="nav-link scrollto" href="/d">Dashboard</a></li>

							<!-- <li class="nav-item"><a class="nav-link scrollto" href="/cont">Contact</a></li> -->
						</ul><!--//nav-->
					</div><!--//navabr-collapse-->

				</nav><!--//main-nav-->
				
			</div><!--//container-->
		</div><!--//branding-->
	</header>


    <!-- <div id="hero-block" class="hero-block" height="100px"> -->
		<!-- <div class="hero-block-mask" style="height:80px"></div> -->

	<!--//hero-block-->
	




    <div class="pcoded-content mt-5">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                                 <!-- start -->
                <div class="form-bg " style="margin-top:10px">
                <div class="container "> 
                    <div class=" col-md-12">
                        @if(isset($message))
                            <div class="alert alert-danger text-center" role="alert">
                                {{$message}}
                            </div>
                        @endif
                        <div class="form-container">
                        <div class="row">
                            <!-- div1 -->
                            <div class="col-md-8">
                                <h3 class="title">Login</h3>
                                <form class="form-horizontal" action="login" method="post" enctype="multipart/form">
                                    @csrf
                                    <div class="d-block ">
                                            <div class="form-group">
                                                <label>Email Adress</label>
                                                <input type="email" class="form-control" placeholder="Email Address" name="email">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                            </div>
                                            <br>
                                            <button class=" btn signup form-group ml-2" type="submit"> Login</button>
                                            <br>
                                            <span class="signin-link ml-2">I dont have an account? Click here to <a class="ml-2" href="/register_t">Register</a></span>
                                    </div>   
                                </form>
                            </div> 
                            <!-- div2 -->
                            <div class="col-md-4 ">
                                <img class="moveImage" src="{{('images/image.jpg') }}"   height="350" width="300">                            </div>
                            </div>
                            <!-- end div2 -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- end -->
    </div>
    <div id="styleSelector">
    </div>
</div>
</div>
</div>
</div>
</div>
<div class="fixed-button">
    <a href="https://codedthemes.com/item/guru-able-admin-template/" target="_blank" class="btn btn-md btn-primary">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
    </a>
</div>
</div>
</div>

<!--Start Footer -->
    <footer class="site-footer" >
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">We make creative <strong>brands</strong> only.</h1>
                </div>
            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                <h4 class="my-4">Contact Info</h4>
                <p class="mb-1">
                    +99 080 070 4224
                </p>
                <p>
                <a href="#">
                    hello@company.com
                </a>
                </p>
            </div>
            <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                <h4 class="my-4">Our Studio</h4>
                <p class="mb-1">
                Av. Lúcio Costa - Barra da Tijuca, Rio de Janeiro - RJ, Brazil
                </p>
            </div>
            <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                <p class="copyright-text">Copyright &copy; 2020 Your Company
                <br>
                <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a></p>
            </div>
            <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
                <ul class="footer-link">
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Work with us</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-dribbble"></a></li>
                    <li><a href="#" class="fa fa-behance"></a></li>
                </ul>
            </div>
            </div>
        </div>
    </footer>

<!--End Footer -->


<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('js/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('js/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{ asset('js/amcharts.min.js')}}"></script>
<script src="{{ asset('js/serial.min.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('js/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/script.js')}}"></script>
<script type="text/javascript " src="{{ asset('js/smoth/SmoothScroll.js')}}"></script>
<script src="{{ asset('js/pcoded.min.js')}}"></script>
<script src="{{ asset('js/demo-12.js')}}"></script>
<script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script>
    var $window = $(window);
    var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
                nav.addClass('active');
        }
        else {
            nav.removeClass('active');
        }
    });
</script>
</body>

</html>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>