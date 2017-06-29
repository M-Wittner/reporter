var app = angular.module('myApp', []);

//app.config(function ($routeProvider) {
//	$routeProvider
//		.when('/reporter', {
//			templateUrl: 'public/html/index.html',
//			controller: 'mainCtrl'
//		})
//});

app.directive('myApp', function(){
	return {
		restrict: 'E',
		templateUrl: 'reporter/register/signup_view.html'
	}
});

app.controller('reportCtrl', ['$scope', '$location', function ($scope, $location) {
	console.log('success');
	console.log($location.path());
	}]);

//	app.controller('registerCtrl', ['$scope','$http', function($scope, $http) {
//		$scope.try = "test!!!";
//		console.log("log");	
//}]);
