<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body ng-app="myApp">
<h1>AngularJS $http.post() Demo: </h1>
    <div ng-controller="myController">
        Response Data: {{data}} <br />
        Error: {{error}}
    </div>
    <form>
        <input type="text" id="name" name="name">        
        <input type="submit" id="submit" name="submit">        
    </form>
    <script>
        var myApp = angular.module('myApp', []);
        myApp.controller("myController", function ($scope, $http) {
            var onSuccess = function (data, status, headers, config) {
                $scope.data = data;
            };
            var onError = function (data, status, headers, config) {
                $scope.error = status;
            }
            $("#submit").click(function(){
                var name = $("#name").val();
                $http.post('post.php', { myData: 'Hello World', myName: name})
                 .success(onSuccess)
                 .error(onError);
            }); 
        });
    </script>
</body>
</html>