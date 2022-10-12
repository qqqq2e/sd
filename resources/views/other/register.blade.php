<!DOCTYPE html>
<html lang="en" ng-app="myNgApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <!-- <script type="text/javascript" src="{{ asset('js/controllers.js') }}"></script> -->
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
document.getElementById('hhh').value = random_password;

    </script>

</head>
<body>





     <!-- MENU BAR -->
     <nav class="navbar navbar-expand-lg position-fixed">
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
                        <a href="/contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>











<div class="form-bg  " style="margin-top:130px">
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
                    <form class="form-horizontal" action="regester" method="post" enctype="multipart/form">
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
                             <div ng-if="pass1==pass2" class="form-group"> 
                            <!-- <i class="fa-solid fa-check"></i> -->
                            <!-- <i class="bi bi-check2"></i> -->
                           <label for="" class="text-success">match</label> 
                            </div>
                            <div   ng-if="pass1!=pass2" class="form-group"> 
                            <!-- <i class="fa-solid fa-xmark"></i> -->
                            <!-- <i class="bi bi-x-lg"></i> -->
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
</div>
</body>
</html>
<script>
    document.getElementById('hhh').value = random_password;
</script>

<script src="{{ asset('js/jquery.min.js') }}"></script>

<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>