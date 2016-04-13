app.factory('about_us', function ($http) {

	return {

		// Get all pages from server / DB
		list: function () {
			return $http.get('/ajax/about_us');
		},

		// Get a single page from the server / DB
		get: function (id) {
			return $http.get('/ajax/about_us/'+id);
		},

		// Save a new page to the server / DB
		save: function (data) {
			return $http.post('/ajax/about_us', data);
		},

		// Update a page on the server / DB
		update: function (id, data) {
			return $http.put('/ajax/about_us/'+id, data);
		}

	}

});