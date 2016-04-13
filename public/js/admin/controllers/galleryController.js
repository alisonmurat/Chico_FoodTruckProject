app.controller('galleryController', function ($scope, $routeParams, gallery) {

	$scope.gallery_list = [];			// Variable for all items
	$scope.current_gallery = null;		// Variable for the items shown in the form

	// At startup, check to see if a specific items was requested
	function init() {																																																																																																																																																																																				
		if ($routeParams.id) {
			$scope.getgallery($routeParams.id);
		};
		$scope.getAllgallery();
	}

	// Go and get the list of all items
	$scope.getAllgallery = function () {
		gallery.list().success(function (data) {
			$scope.gallery_list = data;
		});
	}

	// Gets a specific items from the database
	$scope.getgallery = function (gallery_id) {
		gallery.get(gallery_id).success(function (data) {
			$scope.current_gallery = data;
		});
	}

	// Saves what is in the form
	$scope.saveitems = function () {
		
		if ($scope.current_gallery.id) {
			gallery.update($scope.current_gallery.id, $scope.current_gallery).success(function (data) {
				$scope.current_gallery = data;
			});
		} else {
			gallery.save($scope.current_gallery).success(function (data) {
				$scope.current_gallery = data[0];				
			});
		};
		$scope.getAllgallery();
	}

	// Resets the form
	$scope.cleargallery = function () {
		$scope.current_gallery = null;
	}

	// Call the startup script
	init();


});// JavaScript Document