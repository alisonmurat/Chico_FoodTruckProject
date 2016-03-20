var app = angular.module('adminApp', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
	$routeProvider
		.when('/items/:id?', {
			controller: 'items/Controller',
			templateUrl: '/js/admin/partials/itemsTmpl.html'
			
			$routeProvider
		.when('/about_us/:id?', {
			controller: 'about_us/Controller',
			templateUrl: '/js/admin/partials/about_usTmpl.html'
		})
		.otherwise({ redirectTo: '/home_page' });

}]);

