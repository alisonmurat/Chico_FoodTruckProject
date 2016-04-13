app.controller('ItemsController', function ($scope, $routeParams, items) {

	$scope.items_list = [];			// Variable for all items
	$scope.current_items = null;		// Variable for the items shown in the form

	// At startup, check to see if a specific items was requested
	function init() {
		if ($routeParams.id) {
			$scope.getitems($routeParams.id);
		};
		$scope.getAllitemss();
	}

	// Go and get the list of all items
	$scope.getAllitemss = function () {
		items.list().success(function (data) {
			$scope.items_list = data;
		});
	}

	// Gets a specific items from the database
	$scope.gethomepage = function (homepage) {
		items.get(homepage).success(function (data) {
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