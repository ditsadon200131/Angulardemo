<script src="angular-1.7.9/angular.js"></script>
<script>
    var app = angular.module('myApp',[]);
   
    app.controller('myController',function ($scope, $http) {
        $scope.sendData =() => {
            var parame ={
                id: 1001,
                name: 'hamm'
            }
            $http.post('save_to_database.php', parame).then(res => {
                console.log(res.data);
            })
        }
    })

  </script>
<div ng-app="myApp" ng-controller="myController"> 
<button ng-click="sendData()">
    Send Data to Server
</button>
</div>
   
