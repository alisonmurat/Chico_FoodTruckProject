var app = angular.module('adminApp', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider) {
	$routeProvider
		.when('/pages/:id?', {
			controller: 'PageController',
			templateUrl: '/js/admin/partials/PageTmpl.html'
		})
		.when('/items/:id?', {
			controller: 'ItemsController',
			templateUrl: '/js/admin/partials/itemsTmpl.html'
		})
		.when('/about_us/:id?', {
			controller: 'About_usController',
			templateUrl: '/js/admin/partials/about_usTmpl.html'
		})
		.when('/gallery/:id?', {
			controller: 'galleryController',
			templateUrl: '/js/admin/partials/galleryTmpl.html'
		})
		.when('/home/:id?', {
			controller: 'homepageController',
			templateUrl: '/js/admin/partials/homepageTmpl.html'
		})
		.otherwise({ redirectTo: '/items' });

}]);

