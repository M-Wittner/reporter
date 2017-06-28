;(function(){
	var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);
	
	app.controller('registerCtrl', ['$scope','$http', function($scope, $http) {
		$scope.user = {};
		$scope.submitForm = function() {
			$scope.registration = {};
			$http({
				method: 'post',
				dataType: 'json',
				url: 'http://localhost:3000/reporter/register',
				data: $scope.user, //forms user object
				headers: {'Content-Type': 'application/json'}
			}).success(function (data) {
				$scope.registrations=data;
			});
		};
}]);}())