<!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Meeting</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="CodedThemes">
        <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
        <meta name="author" content="CodedThemes">
        <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/themify-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/icofont.css')}}">
        <link rel="stylesheet"  href="{{ asset('css/icofont.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css')}}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
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
    <div id="pcoded" class="pcoded" >
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
                                <img src="{{asset('images/users/'.$image)}}" class="img-30 img-radius rounded rounded-circle" alt="User-Profile-Image">
                                    <div class="user-details">
                                    <span>{{session('user')['username']}}</span>
                                        <span id="more-details"><div class="bg-green" style="margin-top:4px;margin-right:5px;border-radius: 50%;  background-color: #04AA6D;border: none;color: white;padding: 6px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;cursor: pointer;">  </div class="">Active</span>
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
                                <li class="active">
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
                                <li>
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

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                    <!-- <img src="{{asset('images/avatars/dashboard.png')}}" class='bg-c-blue card1-icon' width='40px' alt=""> -->
                                                    <img  class='bg-c-blue card1-icon' width='40px' alt="" src="{{asset('images/avatars/icon1.gif')}}"/>  
                                                    <span class="text-c-blue f-w-600 ">Last Access</span>
                                                        <h4 class="">{{session('user')['updated_at']->format('l')}}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                            <img  class="text-c-blue f-16 icofont icofont-warning m-r-10" width='20px' alt="" src="{{asset('images/avatars/verify.png')}}"/>  
                                                                {{session('user')['updated_at']->format('d M Y h:i')}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">

                                                    <!-- <i class="icofont icofont-ui-home "></i> -->
                                                    <img src="{{asset('images/avatars/icon2.gif')}}" class='bg-c-pink card1-icon' width='40px' alt="">
                                                        <span class="text-c-pink f-w-600">Last Meeting</span>
                                                        <h4>{{$name_last_reunion}}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                            <img  class="text-c-blue f-16 icofont icofont-warning m-r-10" width='20px' alt="" src="{{asset('images/avatars/verify.png')}}"/> {{$date_last_reunion}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                    <img src="{{asset('images/icons8-home.gif')}}" class='bg-c-pink card1-icon' width='40px' alt="">
                                                        <!-- <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i> -->
                                                        <span class="text-c-green f-w-600">Participants</span>
                                                        <h4>{{$last_participants}}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                            <img  class="text-c-blue f-16 icofont icofont-warning m-r-10" width='20px' alt="" src="{{asset('images/avatars/verify.png')}}"/> In last meet
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                    <img src="{{asset('images/avatars/icon3.gif')}}" class='bg-c-yellow card1-icon' width='40px' alt="">
                                                        <!-- <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i> -->
                                                        <span class="text-c-yellow f-w-600">Date Now</span>
                                                        <h4>{{date('d')}}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                            <img  class="text-c-blue f-16 icofont icofont-warning m-r-10" width='20px' alt="" src="{{asset('images/avatars/verify.png')}}"/> {{date('D M Y')}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- Statestics Start -->
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statestics</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                            <li><img class="icofont icofont-simple-left " src="{{asset('images/avatars/icon30.png')}}" width='24px' alt=""></li>
                                                                <li><img class="icofont icofont-maximize full-card" src="{{asset('images/avatars/icon36.png')}}" width='16px' alt=""></li>
                                                                <li><img class="icofont icofont-minus minimize-card ml-1" src="{{asset('images/avatars/icon33.png')}}" width='16px' alt=""></li>
                                                                <li><img class="icofont icofont-refresh reload-card ml-1" src="{{asset('images/avatars/icon34.png')}}" width='16px' alt=""></li>
                                                                <li><img class="icofont icofont-error close-card ml-1" src="{{asset('images/avatars/icon35.png')}}" width='16px' alt=""></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-4">
                                                    <div class="card fb-card">
                                                        <div class="card-header">
                                                        <img src="{{asset('images/avatars/meet.gif')}}" class="img-responsive mb-3 mr-3" width="34" alt="">
                                                            <div class="d-inline-block">
                                                                <h5>Meets statistics</h5>
                                                                <span>For life</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>{{$count}}</h2>
                                                                    <p class="text-muted">Host</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    @if(sizeof($parts)==0)
                                                                    <h2>0</h2>
                                                                    @else
                                                                    <h2>{{sizeof($parts)-1}}</h2>
                                                                    @endif
                                                                    <p class="text-muted">Paticipants</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card dribble-card">
                                                        <div class="card-header">
                                                            <img src="{{asset('images/avatars/time.gif')}}" class="img-responsive mb-3 mr-3" width="34" alt="">
                                                            <div class="d-inline-block">
                                                                <h5>Time</h5>
                                                                <span>Number of munites</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>{{$minutes}}</h2>
                                                                    <p class="text-muted">This Month</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>{{$minutes_y}}</h2>
                                                                    <p class="text-muted">This Year</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card twitter-card">
                                                        <div class="card-header">
                                                        <img src="{{asset('images/avatars/cate.gif')}}" class="img-responsive mb-3 mr-3" width="34" alt="">
                                                            <div class="d-inline-block">
                                                                <h5>Categories</h5>
                                                                <span>Most uses</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>{{(round($cat1,1)*100).' %'}}</h2>
                                                                    <p class="text-muted">E-Learning</p>
                                                                </div>
                                                                <div class="col-6 b-r-default">
                                                                    <h2>{{(round($cat2,1)*100).' %'}}</h2>
                                                                    <p class="text-muted">Business</p>
                                                                </div>
                                                                <div class="col-6 b-r-default">
                                                                    <h2>{{(round($cat3,1)*100).' %'}}</h2>
                                                                    <p class="text-muted">Communications</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>{{(round($cat4,1)*100).' %'}}</h2>
                                                                    <p class="text-muted">Other</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>My host meeting</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><img class="icofont icofont-simple-left " src="{{asset('images/avatars/icon30.png')}}" width='24px' alt=""></li>
                                                                <li><img class="icofont icofont-maximize full-card" src="{{asset('images/avatars/icon36.png')}}" width='16px' alt=""></li>
                                                                <li><img class="icofont icofont-minus minimize-card ml-1" src="{{asset('images/avatars/icon33.png')}}" width='16px' alt=""></li>
                                                                <li><img class="icofont icofont-refresh reload-card ml-1" src="{{asset('images/avatars/icon34.png')}}" width='16px' alt=""></li>
                                                                <li><img class="icofont icofont-error close-card ml-1" src="{{asset('images/avatars/icon35.png')}}" width='16px' alt=""></li>

                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Project & Meet</th>
                                                                        <th>Time Spents</th>
                                                                        <th>Participants</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @for ($i = 0; $i < sizeof($name_room); $i++)                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-pink d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">{{$name_room[$i]}}</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">{{$date_created[$i]}}</p>
                                                                          
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">{{$parts[$i]}}</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:{{$parts[$i]*15}}%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endfor
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card add-task-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>List meets jointed</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <a class="btn btn-card btn-outline-danger" style="color:red" href="/join">Join an other </a>
                                                        </div>
                                                    </div>
                                                    @for ($i = 0; $i < sizeof($name_room_participant); $i++)                                                                    <tr>
                                                    <div class="card-block">
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <!-- <span class="cr"> -->
                                                                    <img src="{{asset('images/avatars/plus.gif')}}" alt="" class="img-40">
                                                                    <!-- </span> -->
                                                                    <span><h6>{{$name_room_participant[$i]}} <span class="label bg-c-green m-l-10 f-10">{{$date_created_participant[$i]}}</span></h6></span>
                                                                    <div class="task-card-img m-l-40">
                                                                        <a href="#!"><img src="assets/images/avatar-1.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-1.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endfor

                                                </div>
                                                <!-- Data widget End -->
                                                
                                            </div>
                                        </div>
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
    <script>'use strict';
    $(document).ready(function() {

    /*Area chart*/

        var chart = AmCharts.makeChart("statestics-chart", {
            "type": "serial",
            "marginTop": 12,
            "hideCredits": true,
            "marginRight": 0,
            "dataProvider": [{
                "year": "Jan",
                "value": {{$Jan}}
            }, {
                "year": "Feb",
                "value": {{$Feb}}
            }, {
                "year": "Mar",
                "value": {{$Mar}}
            }, {
                "year": "Apr",
                "value": {{$Apr}}
            }, {
                "year": "May",
                "value": {{$May}}
            }, {
                "year": "Jun",
                "value": {{$Jun}}
            }, {
                "year": "Jul",
                "value":{{$Jul}}
            }, {
                "year": "Aug",
                "value": {{$Aug}}
            }, {
                "year": "Sep",
                "value":{{$Sep}}
            }, {
                "year": "Oct",
                "value":{{$Oct}}
            }, {
                "year": "Nov",
                "value":{{$Nov}}
            }, {
                "year": "Dec",
                "value":{{$Dec}}
            }],
            "valueAxes": [{
                "axisAlpha": 0,
                "dashLength": 6,
                "gridAlpha": 0.1,
                "position": "left"
            }],
            "graphs": [{
                "id": "g1",
                "bullet": "round",
                "bulletSize": 9,
                "lineColor": "#4680ff",
                "lineThickness": 2,
                "negativeLineColor": "#4680ff",
                "type": "smoothedLine",
                "valueField": "value"
            }],
            "chartCursor": {
                "cursorAlpha": 0,
                "valueLineEnabled": false,
                "valueLineBalloonEnabled": true,
                "valueLineAlpha": false,
                "color": '#fff',
                "cursorColor": '#FC6180',
                "fullWidth": true
            },
            "categoryField": "year",
            "categoryAxis": {
                "gridAlpha": 0,
                "axisAlpha": 0,
                "fillAlpha": 1,
                "fillColor": "#FAFAFA",
                "minorGridAlpha": 0,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            }
        });
        /*donut chart*/

});
</script>