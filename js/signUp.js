var app = angular.module ("farmApp", []);

app.controller ("myCtrl", function($scope, $http, $log){
	$scope.register = function (){
		var FormData = {
			'name': $scope.ufName + " " + $scope.ulName,
			'email': $scope.uEmail,
			'password': $scope.uPassword,
			'dob': $scope.uDob,
			'address': $scope.uAddress,
			'city': $scope.uCity,
			'postcode': $scope.uPostCode,
			'phone': $scope.uPhone,
			'role': $scope.uRole
		};
		
		var url = "api/processSignUp.php";
		var data = FormData;
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
					alert("You have successfully registered");
					window.location.href = "index.php";
//					$scope.islogin = true;
				}
				else {
					$scope.errMsg = response.data;
					alert($scope.errMsg);
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

