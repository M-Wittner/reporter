;(function(){
	var app = angular.module('myApp', ['ngRoute', 'ngAnimate']);
	
	app.config(function($routeProvider) {
		$routeProvider
		.when('/reports', {
			templateUrl: 'views/login_view.php',
			controller: 'reportCtrl'
		})
	});

    app.controller('reportCtrl', ['$scope', function ($scope) {
		console.log('success');
	}])
}());