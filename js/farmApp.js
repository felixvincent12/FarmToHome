var app = angular.module('farmApp',['ngRoute']);

app.config(function($routeProvider, $locationProvider){
    $locationProvider.hashPrefix('');
    $routeProvider
    .when("/",{
        templateUrl:"homePage.php"
    }).when("/home",{
        templateUrl:"homePage.php"
    }).when("/ProductPage",{
        templateUrl:"ProductPage.php"
    }).when("/ProductManagementPage",{
        templateUrl:"ProductManagementPage.php"
    }).when("/aboutUs",{
        templateUrl:"aboutUs.php"
    }).when("/FeedbackPage",{
        templateUrl:"FeedbackPage.php"
    }).when("/UploadProduct",{
        templateUrl:"UploadProduct.php"
    }).when("/ShoppingCart",{
        templateUrl:"ShoppingCart.php"
    }).when("/SignUpPage",{
        templateUrl:"SignUpPage.php"
    }).when("/UserProfilePage",{
        templateUrl:"UserProfilePage.php"
    })
});

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
