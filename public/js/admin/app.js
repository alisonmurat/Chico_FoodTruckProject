var app = angular.module('adminApp', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
	$routeProvider
		
		.when('/about_us', {
			controller: 'about_usController',
			templateUrl: '/js/admin/partials/about_usTmpl.html'
		})
		
		.otherwise({ redirectTo: '/login' });

}]);

