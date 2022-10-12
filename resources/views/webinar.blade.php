<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">



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

<header id="header" class="header fixed-top">	    
		<div class="branding">
			<div class="container-fluid">
				<nav class="main-nav navbar navbar-expand-lg">
					<!-- <div class="site-logo"><a class="scrollto" href="#hero-block"><img class="logo-icon" src="images/logo.jpg"  alt="logo"></a></div>     -->
					
					<div class="navbar-btn order-lg-2"><a class="btn btn-secondary" href="/" >Web4You</a></div>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					
					<div id="navigation" class="navbar-collapse collapse  justify-content-lg-end me-lg-3">
						<ul class="nav navbar-nav">
							
							<li class="nav-item"><a class="nav-link scrollto" href="/about">About</a></li>                                              
							<li class="nav-item"><a class="nav-link scrollto" href="/reg">Register</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="/log">Login</a></li>
							<li class="nav-item"><a class="nav-link scrollto" href="/d">Dashboard</a></li>

							<!-- <li class="nav-item"><a class="nav-link scrollto" href="/cont">Contact</a></li> -->
						</ul><!--//nav-->
					</div><!--//navabr-collapse-->

				</nav><!--//main-nav-->
				
			</div><!--//container-->
		</div><!--//branding-->
	</header>



	<div id="hero-block" class="hero-block bg-primary">
		<div id="hero-carousel" class="hero-carousel carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item-1 carousel-item active">
				</div>
				<div class="carousel-item-2 carousel-item">
				</div>
				<div class="carousel-item-3 carousel-item">
				</div>
			</div>
		</div>
		<div class="hero-block-mask"></div>
		<div class="container">
			<div class="hero-text-block ">
				<h1 class="hero-heading mb-2">DevConf 2028</h1>
				<div class="hero-meta mb-3"><i class="far fa-calendar-alt me-2"></i>12 - 15 Oct <i class="fas fa-map-marker-alt mx-2"></i>New York, USA</div>
				<div class="hero-intro mb-4">The #1 Bootstrap Template for <br>Tech Conferences and Events.</div>
				<div class="hero-cta"><a class="btn btn-primary btn-lg" href="#meet" >Get Started</a></div>
				<!-- target="_blank" -->
			</div><!--//hero-text-block-->
		</div><!--//container-->

	</div><!--//hero-block-->
	




<div class="container mt-5 mb-3" id="meet">
    <div class="row">
		<?php $i=0;?>
	@foreach($webinars as $webinar)
        <div class="col-md-4">
            <div class="card p-3 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon">
							<img src="{{asset('images/users/'.$image[$i])}}" height=50 width="50" style="border-radius:15px" alt="" class="img-30">
 						</div>
                        <div class="ms-2 c-details">
                            <h6 class="mb-0">{{$user_t[$i]}}</h6> <span>{{$difference[$i]}}</span>
                        </div>
                    </div>
                    <div class="badge"> <span>{{$webinar['category']}}</span> </div>
                </div>
                <div class="mt-5">
                    <h3 class="heading">{{$webinar['name']}}</h3>
                    <div class="mt-5">
                        <div class="progress">
							<?php $val = ($webinar['participants'] * 100)/$webinar['capacity'] ; ?>
                            <div class="progress-bar" role="progressbar" style="width: {{$val}}%" aria-valuenow="{{$webinar['participants']}}" aria-valuemin="0" aria-valuemax="{{$webinar['capacity']}}"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">{{$webinar['participants']}} Applied <span class="text2">of {{$webinar['capacity']}} capacity</span></span> </div>
                    </div>
                </div>
            </div>
        </div>
		<?php $i++;?>
		@endforeach
    </div>
</div>


<style>
        body {
        background-color: #eee
    }

    .card {
        border: none;
        border-radius: 10px
    }

    .c-details span {
        font-weight: 300;
        font-size: 13px
    }

    .icon {
        width: 50px;
        height: 50px;
        background-color: #eee;
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 39px
    }

    .badge span {
        background-color: #fffbec;
        width: 60px;
        height: 25px;
        padding-bottom: 3px;
        border-radius: 5px;
        display: flex;
        color: #fed85d;
        justify-content: center;
        align-items: center
    }

    .progress {
        height: 10px;
        border-radius: 10px
    }

    .progress div {
        background-color: red
    }

    .text1 {
        font-size: 14px;
        font-weight: 600
    }

    .text2 {
        color: #a5aec0
    }
</style>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table width="100%" cellspacing="0" cellpadding="" class="table">
            <tr>
                <th scope="col">ID</th>
                <td ><input  id="ID" type="text" style="border:none" readonly></input></td>
            </tr>
            <tr>
                <th scope="col">Password</th>
                <td ><input  id="Password" type="text" style="border:none" readonly></input></td>
            </tr>
            <tr>
                <th scope="col">Name</th>
                <td ><input  id="Name" type="text" style="border:none" readonly></input></td>
            </tr>
            <tr>
                <th scope="col">Date</th>
                <td ><input  id="Date" type="text" style="border:none" readonly></input></td>
            </tr>
            <tr>
                <th scope="col">Duration</th>
                <td ><input  id="Duration" type="text" style="border:none" readonly></input></td>
            </tr>
            <tr>
                <th scope="col">Lien</th>
                <td ><input  id="Lien" type="text" style="border:none" readonly></input></td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




