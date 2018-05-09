var app = angular.module("farmApp", []);

app.controller ("loginCtrl", function($scope, $http, $window){
    $scope.login = function (){
        var loginData = {
            email: $scope.loginEmail,
            password: $scope.loginPassword
        };
        
        var url = "api/processLogin.php";
		var data = loginData;
		var header = {'Content-Type':'application/x-www-form-urlencoded;'};
	
		//call the services
		$http({
			method: 'POST',
			url: url,
			data: $.param(data),
			headers: header
		})
        .then (
			function(response){
				if(response.data == "success"){
					$window.alert("You have successfully login");
					$window.location.href = "index.php";
//					$scope.islogin = true;
				}
				else {
					$scope.errMsg = response.data;
					$window.alert($scope.errMsg);
				}                
			},
			function(response){
				$scope.msg = "service does not exist";
				$scope.statusval = response.status;
				$scope.statustext = response.statusText;
				$scope.headers = response.headers;
			}
		);	
	};
          
}); 
