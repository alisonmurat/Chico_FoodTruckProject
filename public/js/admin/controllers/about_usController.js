app.controller('about_usController', function ($scope, $routeParams, Page) {

	$scope.about_us_list = [];			// Variable for all about_us
	$scope.current_about_us = null;		// Variable for the about_us shown in the form

	// At startup, check to see if a specific page was requested
	function init() {
		if ($routeParams.id) {
			$scope.getabout_us($routeParams.id);
		};
		$scope.getAllabout_us();
	}

	// Go and get the list of all pages
	$scope.getAllabout_us = function () {
		about_us.list().success(function (data) {
			$scope.about_us_list = data;
		});
	}

	// Gets a specific page from the database
	$scope.getabout_us = function (aboutus) {
		Page.get(aboutus).success(function (data) {
			$scope.current_aboutus = data;
		});
	}

	// Saves what is in the form
	$scope.saveabout_us = function () {
		
		if ($scope.current_about_us.id) {
			.update($scope.current_about_us.id, $scope.current_about_us).success(function (data) {
				$scope.current_about_us = data;
			});
		} else {
			about_us.save($scope.current_about_us).success(function (data) {
				$scope.current_about_us = data[0];				
			});
		};
		$scope.getAllabout_us();
	}

	// Resets the form
	$scope.clearabout_us = function () {
		$scope.current_about_us = null;
	}

	// Call the startup script
	init();


});