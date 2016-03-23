app.controller('PageController', function ($scope, $routeParams, Page) {

	$scope.about_us_list = [];			// Variable for all about_uss
	$scope.current_about_us = null;		// Variable for the about_us shown in the form

	// At startup, check to see if a specific about_us was requested
	function init() {
		if ($routeParams.id) {
			$scope.getPage($routeParams.id);
		};
		$scope.getAllPages();
	}

	// Go and get the list of all about_us
	$scope.getAllPages = function () {
		Page.list().success(function (data) {
			$scope.about_us_list = data;
		});
	}

	// Gets a specific about_us from the database
	$scope.getPage = function (about_us_id) {
		Page.get(about_us_id).success(function (data) {
			$scope.current_about_us = data;
		});
	}

	// Saves what is in the form
	$scope.savePage = function () {
		
		if ($scope.current_about_us.id) {
			Page.update($scope.current_about_us.id, $scope.current_about_us).success(function (data) {
				$scope.current_about_us = data;
			});
		} else {
			Page.save($scope.current_about_us).success(function (data) {
				$scope.current_about_us = data[0];				
			});
		};
		$scope.getAllPages();
	}

	// Resets the form
	$scope.clearPage = function () {
		$scope.current_about_us = null;
	}

	// Call the startup script
	init();


});