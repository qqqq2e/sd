<!DOCTYPE html>
<html lang="en" ng-app="myNgApp">

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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style4.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css')}}"></link>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}"></link>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css')}}"></link>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/angular.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo-digital-trend.css') }}">
        <script>
            var random_password="";
            for(var i=0;i<16;i++){
                var groceries = [0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','!','@','#','$','%','&','*','(',')','_','+','=','-','}','{',']','[','|','\\','/','?','>','<',]
                let mygroceries = groceries[Math.floor(Math.random() * groceries.length)]
                random_password=random_password+mygroceries;
            }
            var ngApp = angular.module('myNgApp', []);
            ngApp.controller('myController', function ($scope) {
            $scope.random = random_password;        
            });
            ngApp.controller('myControllerPower', function ($scope) {
            });
            document.getElementById('generate_password').innerHTML = random_password;
        </script>
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
							<li class="nav-item"><a class="nav-link scrollto" style="color:black" href="/reg">Register</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="/log">Login</a></li>
                            <li class="nav-item"><a class="nav-link scrollto" href="/d">Dashboard</a></li>

							<!-- <li class="nav-item"><a class="nav-link scrollto" href="/cont">Contact</a></li> -->
						</ul><!--//nav-->
					</div><!--//navabr-collapse-->

				</nav><!--//main-nav-->
				
			</div><!--//container-->
		</div><!--//branding-->
	</header>


    <!-- <div id="hero-block" class="hero-block" height="100px"> -->
		<!-- <div class="" style="height:60px"></div> -->

	<!--//hero-block-->
	


<div class="pcoded-content mt-5">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- start -->
                <div class="form-bg  " style="margin-top:10px">
    <div class="container">
        <div class="row">
            <div class=" col-md-8">
                @if(isset($message))
                <div class="alert alert-danger text-center" role="alert">
                {{$message}}
                </div>
                @endif
                <div class="form-container">
                    <h3 class="title">Register</h3>
                    <form class="form-horizontal" action="regester" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" name="username">
                        </div>
                        <div class="form-group">
                            <label>Email Adress</label>
                            <input type="email" class="form-control" placeholder="exampl@domain.com" name="email">
                        </div>
                        <div class="check-terms">
                            <input type="checkbox" class="checkbox" name="generate" ng-model="select">
                            <span class="check-label">Auto generate</span>
                        </div>
                        <div ng-controller="myControllerPower" ng-show="!select">

                            <div class="form-group" >
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password1" ng-model="pass1">
                            </div>
                            <div class="form-group" >
                                <label>Retry password</label>
                                <input type="password" class="form-control" placeholder="Retry password" name="password2" ng-model="pass2">
                            </div>
                             <div ng-if="pass1==pass2 && pass1!=''" class="form-group" > 
                           <label for="" class="text-success">match</label> 
                            </div>
                            <div   ng-if="pass1!=pass2" class="form-group"  > 
                            <label for="" class="text-danger">no match</label> 
                            </div>
                        </div>
                        <input type="hidden" name="password" id="hhh">
                        <div ng-show="select" ng-controller="myController"> 
                               <div id="generate_password" class="form-group">
                                   <label for="" class="text-primary" style="font-size:14px">password : <script>document.write(random_password)</script></label>         
                                </div>
                        </div>
                         <h4 class="sub-title text-info">Personal Information</h4>
                            <div class="col-md-9">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="account-general">

                                    <div class="card-body media align-items-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80">
                                        <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput" name='image'>
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                                        <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                        </div>
                                    </div>
                                    <hr class="border-light m-0">
                                </div>
                            </div>    
                        </div>
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" class="form-control" placeholder="Age" name="age">
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <select class="form-control" name="country">
                                <option value="paris">Paris</option>
                                <option value="new york">New York</option>
                                <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>     <option value="paris">Paris</option>
                                <option value="new york">New York</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Profession</label>
                            <select class="form-control" name="profession">
                                <option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option><option value="paris">Etudiant</option>
                                <option value="paris">Etudiant</option>
                            </select>
                        </div>
                        <div class="check-terms">
                            <input type="checkbox" class="checkbox" name="check">
                            <span class="check-label">I agree to the terms</span>
                        </div>
                        <span class="signin-link">Already have an account? Click here to <a class="ml-2" href="/log">Login</a></span>
                        <button class="btn signup" type="submit">Create Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>                                    <!-- end -->
</div>
<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

<!-- Start Footer -->
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

<!-- End Footer -->

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
<script>
    document.getElementById('hhh').value = random_password;
</script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script> 