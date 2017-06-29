var app = angular.module('myApp', ['ngRoute']);

app.controller('registerCtrl', ['$scope', '$http', function ($scope, $http) {
	$scope.welcome = "test!!!";
	console.log($scope.welcome);

}]);
