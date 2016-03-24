var app = angular.module('adminApp', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
	$routeProvider
		.when('/items/:id?', {
			controller: '/js/admin/controllers/ItemsController',
			templateUrl: '/js/admin/partials/itemsTmpl.html'
		})
		.when('/about_us/:id?', {
			controller: '/js/admin/controllers/about_usController',
			templateUrl: '/js/admin/partials/about_usTmpl.html'
		})
		
		.otherwise({ redirectTo: '/items' });

}]);

