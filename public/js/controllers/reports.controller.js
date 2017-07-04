var myApp = angular.module('myApp');

myApp.controller('reportCtrl', ['$scope', '$location','$http', function ($scope, $location, $http) {
	$scope.report = {};
	$scope.reports = function () {
		$http({
			method: 'GET',
			dataType: 'json',
			url: 'http://localhost:3000/reporter/reports',
			data: $scope.report,
			headers: {'Content-Type': 'application/json'}
		}).success(function(data) {
			$scope.reports = data;
			console.log(data);
			console.log("dsadsada");
		}).error(function (data, status) {
			console.log("error");
			console.log(data);
			console.log(status);
		})
	}
	}]);

	myApp.controller('registerCtrl', ['$scope','$http','$location', function($scope, $http, $location) {
		$scope.try = "test!!!";
		console.log("log");	
}]);