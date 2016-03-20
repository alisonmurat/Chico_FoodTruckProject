var app = angular.module('adminApp', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
	$routeProvider
		.when('/items/:id?', {
			controller: 'ItemsController',
			templateUrl: '/js/admin/partials/ItemsTmpl.html'
		})
		.otherwise({ redirectTo: '/pages' });

}]);

