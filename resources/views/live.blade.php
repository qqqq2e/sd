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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.css')}}"><link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo-digital-trend.css') }}">
        <script type="text/javascript" src="{{ asset('js/jquery.min.js')}}"></script>
        <script src='https://meet.jit.si/external_api.js'></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
        <script type='text/javascript'>
                var api = null; 
                var name_participant=[];
                var i = 1;
                var j = 0;
                function BindEvent(){

                    $('#btnHangup').on('click',function(){
                    Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, hangup it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#video').hide();
                            $('#chat').hide();
                            $('#hand').hide();
                            $('#left').hide();
                            $('#join').hide();
                            $('#video').hide();
                            $('#chat').hide();
                            $('#hand').hide();
                            $('#left').hide();
                            $('#join').hide();       
                            $('#btnScreenShareCustom').hide();
                            $('#btnCustomTileView').hide();
                            $('#btnCustomCamera').hide();
                            $('#btnCustomMic').hide();
                            $('#btnHangup').hide();

                            api.executeCommand('hangup').then((res)=>{
                                Swal.fire(
                                    'End!',
                                    'Your meeting has been ended.',
                                    'success'
                                    )}
                            );
                        
                        }
                    });   
                    $('#to_home').show();
                    });

                    $('#btnCustomMic').on('click',function(){
                        api.executeCommand('toggleAudio');
                    });
                    $('#btnCustomCamera').on('click',function(){
                        api.executeCommand('toggleVideo');
                    });
                    $('#btnCustomTileView').on('click',function(){
                        api.executeCommand('toggleTileView');
                    });
                    $('#btnScreenShareCustom').on('click',function(){
                        api.executeCommand('toggleShareScreen');
                    });
                    $('#part').on('click',function(){
                        api.executeCommand('participantJoined');
                    });
                    $('#hand').on('click',function(){
                        api.executeCommand('toggleRaiseHand');
                    });
                    $('#chat').on('click',function(){
                        api.executeCommand('toggleChat');
                    });

                }

                function codeAddress(){

                    const domain = 'meet.jit.si';
                    const options = {
                        roomName: '{{$name}}',
                        width: 700,
                        height: 700,
                        parentNode: document.querySelector('#meet'),
                        lang: '{{$lan}}',
                        userInfo: {
                        email: '{{$email}}',
                        displayName: '{{$username}}'
                                   },
                        configOverwrite: {
                            doNotStoreRoom : true,
                            startVideoMuted : {{$camera}},
                            startWithVideoMuted : {{$camera}},
                            startWithAudioMuted : {{$mic}},
                            enableWelcomePage :true,
                            prejoinPageEnabled : false,
                        },
                        interfaceConfigOverwrite: { 
                                filmStripOnly : false,
                                SHOW_JITSI_WATERMARK : true,
                                SHOW_WATERMARK_FOR_GUESTS : true,
                                DEFAULT_REMOTE_DISPLAY_NAME : 'New User',
                                  TOOLBAR_BUTTONS: [
                                        'closedcaptions', 'desktop', 'embedmeeting', 
                                        'fodeviceselection', 'profile', 'recording',
                                        'livestreaming', 'etherpad',  'settings',
                                        'videoquality', 'filmstrip', 'invite', 'stats', 'shortcuts',
                                        'select-background', 'download',  'mute-everyone', 'mute-video-everyone', 'security'
                                    ],
                        },
                        onload: function(){
                            $('#toolbox').show();
                            $('#start').hide();
                        }
                    };
                    api = new JitsiMeetExternalAPI(domain, options);
                    // set new password for channel
                    api.addEventListener('participantRoleChanged', function(event) {
                        if (event.role === "moderator") {
                            api.executeCommand('password', '{{$password}}');
                        }
                    });
                    // join a protected channel
                    api.on('passwordRequired', function ()
                    {
                        api.executeCommand('password', '{{$password}}');
                    });
                    api.addEventListeners({
                        readyToClose:function(){
                            $('#meet').empty();
                            $('#toolbox').hide();
                            $('#start').hide();
                            $('#to_home').show();   
                        },
                        
                    audioMuteStatusChanged:function(data){
                        if(data.muted){
                            $('#btnCustomMic').text('Unmute');
                            
                        }else{
                            $('#btnCustomMic').text('Mute');
                            
                        }
                    },
                    videoMuteStatusChanged:function(data){
                        if(data.muted){
                            $('#btnCustomCamera').text('Start Cam');
                        }else{
                            $('#btnCustomCamera').text('Stop Cam'); 
                        }
                    },
                    TileViewChanged:function(data){

                    },
                    ScreenSharingStatusChanged:function(data){
                        if(data.on){
                            $('#btnScreenShareCustom').text('Stop SS');
                        }else{
                            $('#btnScreenShareCustom').text('Start SS'); 
                        }
                    },
                    participantJoined:function(data){
                        name_participant.push(data['displayName']);
                        i++;
                        $('#join').text(i);
                    },
                    participantLeft:function(data){
                        console.log('participantLeft',data);
                        j++;
                        $('#left').text(j);
                    },

                    });
                    api.executeCommand('subject','New Room 2')
                   
                    }
                </script>
                <script>
                    $(function(){
                        BindEvent();
                        codeAddress();
                            $('#start').on('click', function(){
                                codeAddress();
                            });
                        });
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
                            <li class="header-notification">
                                <a href="#!">
                                    <img src="{{asset('images/bell.svg')}}" width='16px' alt="">
                                    <span class="badge bg-c-pink"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('images/avatar-1.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="{{asset('images/avatar-1.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                        <img class="d-flex align-self-center img-radius" src="{{asset('images/avatar-1.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                <img src="{{asset('images/users/'.$image)}}" class="img-radius rounded rounded-circle" alt="User-Profile-Image">
                                <span>{{session('user')['username']}}</span>                                    <i class="ti-angle-down"></i>
                                </a>
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
                                <img src="{{asset('images/users/'.$image)}}" class=" img-40 img-radius rounded rounded-circle" alt="User-Profile-Image">
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
                                <li class="active">
                                    <a href="/me">
                                    <img style="margin-left:3px" src="images/avatars/icon7.gif" height="40" width="40" />
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Meeting</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/join">
                                    <img style="margin-left:3px" src="images/avatars/icon6.gif" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Join meeting</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/profile">
                                    <img style="margin-left:3px" src="images/avatars/icon5.gif" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/cont">
                                    <img style="margin-left:3px" src="images/avatars/icon8.gif" height="40" width="40"/>
                                        <span class="pcoded-mtext ml-2 mt-1" data-i18n="nav.form-components.main">Contact</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>                             
                            </ul>                    
                            </div>          
                        </div>
                    </nav>
                    <!-- <form action="to_home" method="post" enctype="multipart/form-data"> -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                <script src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.1.js" type="text/javascript"></script>
                                <script >
                                $(window).on('load',function(){    
                                    Swal.fire({
                                        position: 'center',
                                        icon: 'success',
                                        title: 'Your meet starting',
                                        showConfirmButton: false,
                                        timer: 1500
                                        })
                                });    
                                </script>
                                    <div id="toolbox" style="display:none">
                                    <button id="btnHangup" class="btn btn-outline-danger">Hangup</button>
                                    <button id="btnCustomMic" class="btn btn-outline-success">Mic</button>
                                    <button id="btnCustomCamera" class="btn btn-outline-warning">Camera</button>
                                    <button id="btnCustomTileView" class="btn btn-outline-secondary">Toogle Tileview</button>
                                    <button id="btnScreenShareCustom" class="btn btn-outline-dark">SS</button>
                                    <button id="join" class="btn btn-outline-info">1</button>
                                    <button id="left" class="btn btn-outline-info">0</button>
                                    <button id="hand" class="btn btn-outline-info">hand</button>
                                    <button id="chat" class="btn btn-outline-info">chat</button>
                                    <button id="video" class="btn btn-outline-info">video</button>
                                    </div>
                                    <div class="flex-center position-ref full-height mt-5" id="meet">
                                    </div>
                                    <form action="to_home/{{$id}}" method="get" enctype="multipart/form-data">
                                        <input id="to_home" type="submit" class="btn btn-outline-danger" style="display:none" value="back to home">
                                    </form>
                                    <div id="styleSelector">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>

<!--Start Footer -->
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