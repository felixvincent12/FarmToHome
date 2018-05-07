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
		
		$log.log(FormData);
		$log.log("hello");
		
		
		var url = "api/processSignUp.php";
		var data = $.param({data: FormData});
		var config = {
			headers: {
				'Content-Type':'application/x-www-form-urlencoded;charset=utf-8;'
			}
		}
		//call the services
		$http.post(url, data, config)
		.then (
			function(response){
				if(response.data == "success"){
					alert("You have successfully registered");
					window.location.href = "index.php";
					s.islogin = true;
				}
				else {
					alert ("unseccessful register, please try again");
				}
//				$scope.responseMsg = response.data;
//				$log.log($scope.responseMsg);
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

