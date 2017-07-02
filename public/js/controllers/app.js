var app = angular.module('myApp', []);

app.controller('reportCtrl', ['$scope', '$location', function ($scope, $location) {
	var reports = {};
	// read all reports
	reports.all = function () {
		return $http({
			method: 'GET',
			url: 'http://localhost:3000/reporter/reports'
		})
	}
	return reports;
	}]);

//	app.controller('registerCtrl', ['$scope','$http', function($scope, $http) {
//		$scope.try = "test!!!";
//		console.log("log");	
//}]);
