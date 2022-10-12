<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg position-absolute">
        <div class="container">
        <a class="navbar-brand" href="/">
        WEBINAIRE            
        </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link active">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login_t" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register_t" class="nav-link">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="/info_meeting" class="nav-link">Meeting</a>
                    </li>
                    <li class="nav-item">
                        <a href="/profile" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>










<div class="form-bg " style="margin-top:130px">
    <div class="container ">
        
        <div class=" col-md-12">
            @if(isset($message))
            <div class="alert alert-danger text-center" role="alert">
            {{$message}}
            </div>
            @endif
            <div class="form-container">
            <div class="row">
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
                <img class="moveImage" src="{{('images/image.jpg') }}"   height="350" width="350">                            </div>
                 </div>
                 <!-- end div2 -->
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>