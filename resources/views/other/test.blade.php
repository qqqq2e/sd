
<!DOCTYPE html>
<html lang="en" ng-app="myNgApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="angular.min.js"></script>
    <!-- <script src="angular-route.min.js"></script> -->
    <!-- <script src="controller.js"></script>
    <script src="cntl.js"></script>
    <script src="./ngg.js"></script> -->
    <!-- <script src="./first.js"></script> -->


    <style>
        .content-area {
  border: 1px solid black;
  margin-top: 10px;
  padding: 10px;
}

.sample-show-hide {
  transition: all linear 0.5s;
}
.sample-show-hide.ng-hide {
  opacity: 0;
}
    </style>
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
   if( $scope.pass1 !=  $scope.pass2) {
    $scope.power = "no match";
   }else {
    $scope.power = "match";
   }    
});
    </script>
</head>

<body >
    <div >
        <div>     
            <spane>generate</spane> 
            <input type="checkbox" name="sd" ng-model="select"  > 
        </div> 
        <div ng-controller="myControllerPower" ng-init="power=''">
        <div ng-show="!select"> 
            <spane>password</spane> 
            <input type="text" name=""  id="" ng-model="pass1">  
        </div> 
        <div ng-show="!select" > 
            <spane>retry</spane> 
            <input type="text" name="" id="" ng-model="pass2">
        </div>
        <div ng-show="!select" ng-if="pass1==pass2" > 
        match
        </div>
        <div ng-show="!select"  ng-if="pass1!=pass2"> 
            not match
            </div>
    </div>



        <div ng-show="select" ng-controller="myController"> 
           <h1 >{{random}}</h1>
        </div>
    </div> 
   


</body>
</html>