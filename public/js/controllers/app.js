var myApp = angular.module('myApp', ['ngRoute']);

myApp.config(function($routeProvider) {
			  $routePrivider.
			  when('reports', {
			  	templateUrl: 'index.html',
			  	controller: 'reportCtrl'
			  });
			  });
//
//myApp.controller('reportCtrl', ['$scope', '$location','$http', function ($scope, $location, $http) {
//	$scope.report = {};
//	$scope.reports = function () {
//		$http({
//			method: 'GET',
//			dataType: 'json',
//			url: 'http://localhost:3000/reporter/reports',
//			data: $scope.report,
//			headers: {'Content-Type': 'application/json'}
//		}).success(function(data) {
//			$scope.reports = data;
//		}).error(function (data, status) {
//			console.log("error");
//			console.log(data);
//			console.log(status);
//		})
//	}
//	}]);
//
//	myApp.controller('registerCtrl', ['$scope','$http','$location', function($scope, $http, $location) {
//		$scope.try = "test!!!";
//		console.log("log");	
//}]);

//var welcome = angular.module('welcome');
//welcome.controller('regController',['$scope','$http',
//function ($scope,$http)
//{
//     $scope.user = {};
//    $scope.submitForm=function() {
//    $scope.registrations = {}; 
//       $http({
//        method:'post',
//        dataType : 'json',
//        url:'http://localhost:3000/reporter/welcome/add',
//        data : $scope.user, //forms user object
//        headers : {'Content-Type': 'application/json'} 
//    }).success(function (data)
//    {
//          $scope.registrations=data;
//          
//    });
//   
//}          
//}]);