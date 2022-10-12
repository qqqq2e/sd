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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style3.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css')}}">  
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
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">  
                        <a href="/" class="ml-5">
                           WEBINAIRE
                        </a>   
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                <img src="{{asset('images/avatars/full.png')}}" width='24px' alt="">
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                           
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="{{asset('images/users/'.$image)}}" class="img-radius rounded rounded-circle" alt="User-Profile-Image">
                                    <span>{{session('user')['username']}}</span>                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="/logout">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="">
                                    <div class="main-menu-header">
                                        <img class="img-30 img-radius rounded rounded-circle" src="{{asset('images/users/'.$image)}}" alt="User-Profile-Image">
                                        <div class="user-details">
                                        <span>{{session('user')['username']}}</span>                                        <span id="more-details"><div class="bg-green" style="margin-top:4px;margin-right:5px;border-radius: 50%;  background-color: #04AA6D;border: none;color: white;padding: 6px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;cursor: pointer;">  </div class="">Active</span>
                                        </div>
                                    </div>
                                    <div class="main-menu-content">
                                        <ul>
                                            <li class="more-details">
                                                <a href="/logout">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                                <ul class="pcoded-item pcoded-left-item">
                                <li >
                                    <a href="/d">
                                    <img style="margin-left:3px" height="40" width="40" src="images/avatars/icon10.gif"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <!-- <ul class="pcoded-item pcoded-left-item"> -->
                                <li>
                                    <a href="/me">
                                    <img style="margin-left:3px" src="images/avatars/meet.png" height="40" width="40" />
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Meeting</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/join">
                                    <img style="margin-left:3px" src="images/avatars/plus.png" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Join meeting</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/getInfo">
                                    <img style="margin-left:3px" src="images/avatars/conferance.png" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Conferance</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/search_conferance">
                                    <img style="margin-left:3px" src="images/avatars/search2.png" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Search</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/myConf">
                                    <img style="margin-left:3px" src="images/avatars/reunion.png" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">My Reunion</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="/profile">
                                    <img style="margin-left:3px" src="images/avatars/profile3.png" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/cont">
                                    <img style="margin-left:3px" src="images/avatars/contact.png" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Contact</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                               
                            </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <form action="/modify_information" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="container light-style flex-grow-1 container-p-y">
                                            <h4 class="font-weight-bold py-3 mb-4">
                                            Account settings
                                            </h4>
                                        <div class="card overflow-hidden">
                                            <div class="row no-gutters row-bordered row-border-light">
                                                <div class="col-md-3 pt-0">
                                                <div class="list-group list-group-flush account-settings-links">
                                                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Info</a>
                                                </div>
                                                </div>
                                                <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div class="tab-pane fade active show" id="account-general">

                                                    <div class="card-body media align-items-center">
                                                        <img src="{{asset('images/users/'.$image)}}" alt="" class="d-block ui-w-80" >
                                                        <div class="media-body ml-4">
                                                            <label class="btn btn-outline-primary">
                                                                Upload new photo
                                                                <input type="file" class="account-settings-fileinput" name="image" >
                                                            </label> &nbsp;
                                                            <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                                            <div class="text-light small mt-1">
                                                                Allowed JPG, GIF or PNG. Max size of 800K
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="border-light m-0">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label class="form-label">Username</label>
                                                            <input type="text" class="form-control mb-1" value="{{$username??''}}" name="username">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">E-mail</label>
                                                            <input type="text" class="form-control mb-1" value="{{$email??''}}" name="email" disabled>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-change-password">
                                                    <div class="card-body pb-2">
                                                        <div class="form-group">
                                                            <label class="form-label" >Current password</label>
                                                            <input type="password" class="form-control" name="password" value="{{$password??''}}" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" >New password</label>
                                                            <input type="password" class="form-control" name="pass1">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Repeat new password</label>
                                                            <input type="password" class="form-control" name="pass2">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="account-info">
                                                    <div class="card-body pb-2">
                                                        <div class="form-group">
                                                            <label class="form-label">Address</label>
                                                            <textarea class="form-control" rows="5" name="adresse">{{$adresse??''}}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Age</label>
                                                            <input type="text" class="form-control" value="{{$age??''}}" name="age">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label">Country</label>
                                                            <select class="custom-select" name="country">
                                                                <option value="USA" >USA</option>
                                                                <option value="Canada"  selected="">Canada</option>
                                                                <option value="UK" >UK</option>
                                                                <option value="Germany" >Germany</option>
                                                                <option value="France" >France</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr class="border-light m-0">
                                                    <div class="card-body pb-2">
                                                        <h6 class="mb-4">Contacts</h6>
                                                        <div class="form-group">
                                                            <label class="form-label">Phone</label>
                                                            <input type="text" class="form-control" value="{{$phone??''}}" name="phone">
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="text-right mt-3">
                                <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                            </div>
                        </div>
                    </form>
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

<!-- Start footer -->
<footer class="site-footer" style="margin-left:270px">
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