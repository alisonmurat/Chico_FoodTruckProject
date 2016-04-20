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
	$scope.getitems = function (items_id) {
		console.log ('get items')
		items.get(items_id).success(function (data) {
			$scope.current_items = data;
		});
	}

	// Saves what is in the form
	$scope.saveitems = function () {
		
		if ($scope.current_items.id) {
			items.update($scope.current_items.id, $scope.current_items).success(function (data) {
				$scope.current_items = data;
			});
		} else {
			items.save($scope.current_items).success(function (data) {
				$scope.current_items = data[0];				
			});
		};
		$scope.getAllitems();
	}

	// Resets the form
	$scope.clearitems = function () {
		$scope.current_items = null;
	}

	// Call the startup script
	init();


});