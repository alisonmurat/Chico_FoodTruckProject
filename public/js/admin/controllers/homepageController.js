app.controller('HomepageController', function ($scope, $routeParams, items) {

	$scope.homepage = [];			// Variable for all items
	$scope.current_homepage = null;		// Variable for the items shown in the form

	// At startup, check to see if a specific items was requested
	function init() {
		if ($routeParams.id) {
			$scope.gethomepage($routeParams.id);
		};
		$scope.getAllhomepage();
	}

	// Go and get the list of all items
	$scope.getAllhomepage = function () {
		homepage.list().success(function (data) {
			$scope.homepage = data;
		});
	}

	// Gets a specific items from the database
	$scope.gethomepage = function (homepage) {
		homepage.get(homepage).success(function (data) {
			$scope.current_homepage = data;
		});
	}

	// Saves what is in the form
	$scope.savehomepage = function () {
		
		if ($scope.current_homepage) {
			homepage.update($scope.current_homepage, $scope.homepage).success(function (data) {
				$scope.current_homepage = data;
			});
		} else {
			homepage.save($scope.current_homepage).success(function (data) {
				$scope.current_homepage = data[0];				
			});
		};
		$scope.getAllhomepage();
	}

	// Resets the form
	$scope.clearhomepage= function () {
		$scope.current_homepage= null;
	}

	// Call the startup script
	init();


});// JavaScript Document