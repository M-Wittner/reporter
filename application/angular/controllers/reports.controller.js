var myApp = angular.module('myApp', ['ngRoute']);

myApp.controller('reportCtrl', ['$scope', '$location','$http', '$log', function ($scope, $location, $http, $log) {
	$http.get('http://localhost:3000/reporter/reports/all')
	.then(function(result) {
//		console.log(result.data);
		$scope.reports=result.data;
	});
	
	$log.info($location.absUrl());
	$log.info('test');
}]);

	myApp.controller('registerCtrl', ['$scope','$http','$location', function($scope, $http, $location) {
		$scope.try = "test!!!";
		console.log("log");	
}]);