;(function(){
	var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);
	
	app.config(function($routeProvider) {
		$routeProvider
		.when('/reporter', {
			templateUrl: 'public/html/index.html',
			controller: 'mainCtrl'
		})
	});

    app.controller('reportCtrl', ['$scope', '$location', function ($scope, $location) {
		console.log('success');
		console.log($location.path());
	}])
}());