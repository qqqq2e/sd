<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Xtreme lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Xtreme Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    
    <!-- Custom CSS -->
    <link href="css/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style4.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <!-- <script src="js/custom.js"></script> -->
    <script src="js/chartist.min.js"></script>
    <script src="js/chartist-plugin-tooltip.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <!-- <script src="js/pages/dashboards/dashboard1.js"></script> -->
    
</head>
<style>
    
body{

background-color: #35abdf;
}
.domain-search {
margin: 0;
padding:50px 0;
}


.bg-pblue {
background-color: #35abdf;
}

.domain-search .form-title {
margin-top: 0;
margin-bottom: 2px;
color: #fff;
font-family: "Poppins", sans-serif;
font-weight: 100;
}

.domain-search p {
color: #B0E7FF;
margin: 0;
}

.domain-search .input-group {
-webkit-box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.1);
box-shadow: 0px 4px 18px 0px rgba(0, 0, 0, 0.1);
}


.domain-search .input-group-addon {
border: none;
}

.domain-search .form-title strong {
display: block;
}

.domain-search .form-control {
height: 60px;
border-radius: 0;
border: none;
}

.domain-search .form-control:focus {

box-shadow: 0px 0px 0px 0px #ffffff !important;

}

.input-group .input-group-addon [type="submit"], .input-group .input-group-addon button {
border: none;
border-radius: 0;
}

.domain-search .btn {
padding: 0 54px;
line-height: 60px;
}


.btn-primary {
padding: 0 28px;
line-height: 54px;
background: #ff6726;
color: #fff;
}

.btn-primary:hover {
color: #fff;
background-color: #286090;
border-color: #204d74;
}

.domain-search .input-group + p {
color: #fff;
font-size: 15px;
font-family: "Poppins", sans-serif;
font-weight: 100;
margin-top: 15px;
margin-bottom: 0;
}

.domain-search .input-group + p strong {
margin-right: 40px;
}
</style>
<body >
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                         <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="{{session('admin')['image']}}" alt="homepage" class="dark-logo" /> -->
                            <!-- Light Logo icon -->
                            <!-- <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <!-- Light Logo text -->
                            <!-- <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> -->
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <!-- <input type="text" class="form-control" placeholder="Search &amp; enter"> <a -->
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            <img src="{{session('admin')['image']}}" height="60" width="60"alt="homepage" class="" />
            <span class="ml-2" style="color:white">{{session('admin')['username']}}</span><br />
            <a href="admin_deconnexion" class="btn btn-light mt-5">Disconnect</a>

        </header>
    
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
               <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Sales Summary</h4>
                                        <h5 class="card-subtitle">Overview of Latest Year</h5>
                                    </div>
                                    <div class="ms-auto d-flex no-block align-items-center">
                                        <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Iphone
                                            </li>
                                            <!-- <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Ipad
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                        <div class="campaign ct-charts"></div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <?php $i=0;?>
                                        @foreach ($total_m as $feed)
                                        @if($feed == 'new webinar')
                                        <li class="feed-item">
                                            <div class="feed-icon bg-info"><i class="far fa-bell"></i></div> You have new webinar. 
                                            <span class="ms-auto font-12 text-muted">{{$difference[$i]}}</span>
                                        </li>
                                        @elseif($feed == 'new fast meeting')
                                        <li class="feed-item">
                                            <div class="feed-icon bg-success"><i class="ti-server"></i></div> new fast meeting.
                                            <span class="ms-auto font-12 text-muted">{{$difference[$i]}}</span>
                                        </li>
                                        @else
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> New user
                                            registered.<span class="ms-auto font-12 text-muted">{{$difference[$i]}}</span>
                                        </li>
                                        @endif
                                        <?php $i++;?>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Top Selling Products</h4>
                                        <h5 class="card-subtitle">Overview of Top Selling Items</h5>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="dl">
                                            <select class="form-select shadow-none">
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <form class="row domain-search bg-pblue">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h2 class="form-title">Find Your <strong>User Informations</strong></h2>
                                            <!-- <p>Search for your user information now</p> -->
                                        </div>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input placeholder="Fint your user information now" type="search" name="search" id="search" class="form-control">
                                                <span class="input-group-addon"><input type="text" id="btn_search" value="Search" class="btn btn-primary" ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="container mt-3 mb-2 form-group" >

                                <select name="order_permission" id="order_permission" >
                                    <option value="all">All</option>
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>

                                </select>
                                <select name="order_etat" id="order_etat">
                                    <option value="all">All</option>
                                    <option value="accept">Accept</option>
                                    <option value="wait">Wait</option>
                                    <option value="refuse">Refuse</option>

                                </select>

                            </div>
                            <div class="table-responsive" id="table_users">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">id</th>
                                            <th class="border-top-0">creator</th>
                                            <th class="border-top-0">name</th>
                                            <th class="border-top-0">date created</th>
                                            <th class="border-top-0">start time</th>
                                            <th class="border-top-0">duration</th>
                                            <th class="border-top-0">start url</th>
                                            <th class="border-top-0">join url</th>
                                            <th class="border-top-0">permission</th>
                                            <th class="border-top-0">etat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;?>
                                        @foreach ($meetings as $meet)
                                        
                                        <tr>
                                            <td>{{$meet->meeting_id}}</td>
                                            <td>{{$user_t[$i]}}</td>
                                            <td>{{$meet->name}}</td>
                                            <td>
                                                <label class="label label-danger">{{$meet->created_at}}</label>
                                            </td>
                                            <td>{{$meet->start_time}}</td>
                                            <td>{{$meet->duration.' min'}}</td>
                                            <td>{{substr($meet['start_url'],0,17)}}<button onclick="copyToClipboard('#text1')"></button></td>
                                            <td >{{substr($meet['join_url'],0,17)}}<button onclick="copyToClipboard('#text2')"></button></td>
                                            <td id="text1" hidden style="display:hidden">{{$meet['start_url']}}</td>
							                <td id="text2" hidden style="display:hidden">{{$meet['join_url']}}</td>
                                            <td>
                                                <label class="label label-primary">{{$meet->permission}}</label>
                                            </td>
                                            @if($meet->etat=="refuse")
                                            <td>
                                                <label class="label label-danger">{{$meet->etat}}</label>
                                            </td>
                                            @elseif($meet->etat=="accept")
                                            <td>
                                                <label class="label label-success">{{$meet->etat}}</label>
                                            </td>
                                            @else
                                            <td>
                                                <button class="btn bg-transparent" href="accept_etat" id="accept_etat"  value="{{$meet->meeting_id}}">                                            
                                                    <img src="{{asset('images/accept.png')}}" width='20px' height='20px' alt="">
                                                <button class="btn bg-transparent" href="refuse_etat" id="refuse_etat"  value="{{$meet->meeting_id}}">                                            
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                        width="20" height="20"
                                                        viewBox="0 0 24 24"
                                                        style=" fill:#000000;"><path d="M 12 0 C 5.371094 0 0 5.371094 0 12 C 0 18.628906 5.371094 24 12 24 C 18.628906 24 24 18.628906 24 12 C 24 5.371094 18.628906 0 12 0 Z M 17.390625 15.429688 L 15.429688 17.390625 L 12 13.960938 L 8.570313 17.390625 L 6.609375 15.429688 L 10.039063 12 L 6.609375 8.570313 L 8.570313 6.609375 L 12 10.039063 L 15.429688 6.609375 L 17.390625 8.570313 L 13.960938 12 Z"></path>
                                                    </svg>                                                
                                                </button>
                                            </td>
                                            @endif
                                        </tr>
                                        <?php $i++;?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<div id="searchResult">

</div>
</html>


    <script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','#accept_etat',function(){
            var iny = $(this).val();
            $.ajax({
                type : "GET",
                url : "/accept_etat/"+iny,
                success : function(response) {
                $('#table_users').load(' #table_users');
                }
            });

        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','#refuse_etat',function(){
            var iny = $(this).val();
            $.ajax({
                type : "GET",
                url : "/refuse_etat/"+iny,
                success : function(response) {
                $('#table_users').load(' #table_users');
                }
            });

        });
    });
</script>



<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>




<script>
    $(function() {
    "use strict";
    // ============================================================== 
    // Newsletter
    // ============================================================== 

    var chart = new Chartist.Line('.campaign', {
        labels: [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12],
        series: [
            [{{$Jan}},{{$Feb}},{{$Mar}},{{$Apr}},{{$May}},{{$Jun}},{{$Jul}},{{$Aug}},{{$Sep}},{{$Oct}},{{$Nov}},{{$Dec}}]
            
        ]
    }, {
        low: 0,
        high: 28,

        showArea: true,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
        ],
        axisY: {
            onlyInteger: true,
            scaleMinSpace: 40,
            offset: 20,
            labelInterpolationFnc: function(value) {
                return (value / 1) + 'k';
            }
        },

    });

    // Offset x1 a tiny amount so that the straight stroke gets a bounding box
    // Straight lines don't get a bounding box 
    // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
    chart.on('draw', function(ctx) {
        if (ctx.type === 'area') {
            ctx.element.attr({
                x1: ctx.x1 + 0.001
            });
        }
    });

    // Create the gradient definition on created event (always after chart re-render)
    chart.on('created', function(ctx) {
        var defs = ctx.svg.elem('defs');
        defs.elem('linearGradient', {
            id: 'gradient',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(255, 255, 255, 1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(64, 196, 255, 1)'
        });
    });


    var chart = [chart];
});
</script>




<script type="text/javascript">
       $(document).ready(function(){

fetch_customer_data();

function fetch_customer_data(query = '')
{
 $.ajax({
  url:"/search",
  method:'GET',
  data:{query:query},
  dataType:'json',
  success:function(data)
  {
    // $('#table_users').hide();
   $('tbody').html(data.table_data);
//    $('#total_records').text(data.total_data);
  }
 })
}

$(document).on('keyup', '#search', function(){
 var query = $(this).val();
 fetch_customer_data(query);
});
});
</script>


<script>
    $(document).ready(function(){
        $('#btn_search').show();
        $i=1;
    $("#btn_search").attr("readonly", true);
    $(document).on('keyup', '#search', function(){
        $('#btn_search').hide();
        if($("#search").val() ==''){
            $('#btn_search').show();

        }

});
    });
</script>




<script type="text/javascript">
       $(document).ready(function(){

// order_data();

function order_data(query = '')
{
    var qr = $('#order_etat').val();

 $.ajax({
  url:"/order_by_permission",
  method:'GET',
  data:{query:query,query2:qr},
  dataType:'json',
  success:function(data)
  {
   $('tbody').html(data.table_data);
   $('#total_records').text(data.total_data);
  }
 })
}
$("select#order_permission").change(function(){
        var s = $(this).children("option:selected").val();
        console.log(s); 
        order_data(s);
    });

});
</script>



<script type="text/javascript">
       $(document).ready(function(){

// order_data();

function order_data(query = '')
{
    var qr = $('#order_permission').val();
 $.ajax({
  url:"/order_by_etat",
  method:'GET',
  data:{query:query,query2:qr},
  dataType:'json',
  success:function(data)
  {
   $('tbody').html(data.table_data);
   $('#total_records').text(data.total_data);
  }
 })
}
$("select#order_etat").change(function(){
        var s = $(this).children("option:selected").val();
        console.log(s); 
        order_data(s);
    });

});
</script>





